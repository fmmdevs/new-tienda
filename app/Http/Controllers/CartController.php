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
        $total = 0;
        $productsInCart = [];

        $productsInSession = $request->session()->get("products");

        if ($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }

        $total = $total;
        $products = $productsInCart;

        return view("cart.index", compact('products', 'total'));
    }

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
        $request->session()->put("products", $products);

        // al comprar se quda en la carta, volver a la categoria donde estuviese?
        return redirect()->route("cart.index");
    }

    public function delete(Request $request)
    {
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
