<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($category)
    {
        // $viewData["title"] = "Products - Online Store";
        // $viewData["subtitle"] = "List of products";
        $products = Product::all();
        return view('product.index', compact('products', 'category'));
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        // $viewData["title"] = $product->getName() . " - Online Store";
        // $viewData["subtitle"] = $product->getName() . " - Product information";
        return view('product.show', compact('product'));
    }
}
