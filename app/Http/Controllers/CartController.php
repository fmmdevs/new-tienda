<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        // Inicializamos las variables
        $total = 0; // precio total
        $productsInCart = []; // productos que vamos a obtener de la bbdd

        // Recuperamos el array products de la session,
        // las claves de este array son ID de producto y los valores la cantidad de cada producto
        $productsInSession = $request->session()->get("products");

        // Comprobamos si tenemos ya productos en el carrito
        if ($productsInSession) {
            // Obtenemos un array con los productos usando array_keys, basicamente
            // le pasamos un array a la funcion findMany con las id de los productos y los traemos de la bbdd
            // seria como select * from products where id in ([id1,id2,id3,....])
            $productsInCart = Product::findMany(array_keys($productsInSession));
            // Usamos el metodo estatico sumPricesByQuantitis para calcular el total
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }

        $total = $total;
        $products = $productsInCart;

        return view("cart.index", compact('products', 'total'));
    }

    // Añadir producto al carrito
    public function add(Request $request, $id)
    {
        // obtenemos el array con los productos de la sesion. key: id del producto value: cantidad de productos
        $products = $request->session()->get("products");
        // añadimos usando como key el id del producto
        if (isset($products[$id])) {
            // Si existe una cantidad de el producto con esta id, añadimos la cantidad que hemos comprado a la que teniamos en el carrito
            $products[$id] += $request->input("quantity");
        } else {
            $products[$id] = $request->input("quantity");
        }
        // actualizamos el products en la sesion
        $request->session()->put("products", $products);

        return redirect()->route("cart.index");
    }

    public function delete(Request $request)
    {
        // Eliminamos products de la sesion
        $request->session()->forget("products");
        return back();
    }

    public function purchase(Request $request)
    {
        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
            $userId = Auth::user()->id;
            $order = new Order();
            $order->user_id = $userId;
            $order->total = 0;
            // Guardamos para generar id
            $order->save();

            $total = 0;
            // obtenemos los productos que tenemos en el carrito
            $productsInCart = Product::findMany(array_keys($productsInSession));
            //Recorremos los productos que tenemos en el carrito
            foreach ($productsInCart as $product) {
                // $productsInSession es un array asociativo cuya
                // clave es la id y el valor es la cantidad de ese producto
                $quantity = $productsInSession[$product->id];
                // Por cada producto que tengamos en el carrito, creamos un nuevo item
                $item = new Item();
                $item->quantity = $quantity;
                $item->price = $product->price;
                $item->product_id = $product->id;
                // aqui usamos la id que hemos generado al hacer $order->save()
                $item->order_id = $order->id;
                $item->save();
                // Vamos calculando el total
                $total = $total + ($product->price * $quantity);
            }
            // Añadimos el total calculado a la orden
            $order->total = $total;
            // volvemos a guardar la orden para que se registre el cambio en la tabla
            $order->save();
            // Eliminamos los productos de la sesion
            $request->session()->forget('products');


            return view('cart.purchase', compact('order'));
        } else {
            return redirect()->route('cart.index');
        }
    }
}
