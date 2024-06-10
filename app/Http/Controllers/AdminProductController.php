<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
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

    public function store(ProductRequest $request)
    {
        $newProduct = new Product();
        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->price = $request->price;
        $newProduct->category_id = $request->category;
        // Guardamos aqui para que se iniciacialice id
        $newProduct->save();


        if ($request->hasFile('image')) {
            // Vamos a nombrar a la imagen con el id del producto seguido de su extension
            $imageName = $newProduct->id . "." . $request->file('image')->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $newProduct->image = $imageName;
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

    public function update(ProductRequest $request, $id)
    {

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
