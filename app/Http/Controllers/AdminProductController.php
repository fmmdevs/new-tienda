<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        // $viewData['title'] = "Admin Page - Products - Online Store";
        $products = Product::all();
        $categories = Category::all();
        return view('admin.product.index', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        // Validations in model
        Product::validate($request);

        $newProduct = new Product();
        $newProduct->name = $request->input('name');
        $newProduct->description = $request->input('description');
        $newProduct->price = $request->input('price');

        $newProduct->category_id = $request->input('category');
        // Guardamos aqui para que se iniciacialice id
        $newProduct->save();


        if ($request->hasFile('image')) {
            // Vamos a nombrar a la imagen con el id del producto seguido de su extension
            $imageName = $newProduct->id . "." . $request->file('image')->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $newProduct->image = $imageName;
        } else {
            // Revisar
            $newProduct->setImage("default.jpeg");
        }

        $newProduct->save();
        return back();
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }

    public function edit($id)
    {
        //     $viewData = [];
        //     $viewData["title"] = "Admin Page - Edit Product - Online Store";
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view("admin.product.edit", compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validations in model
        Product::validate($request);

        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        if ($request->hasFile('image')) {
            $imageName = $product->id . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->image = $imageName;
        }
        $product->save();
        return redirect()->route('admin.product.index');
    }
}
