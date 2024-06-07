<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    //

    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        Category::validate($request);
        $newCategory = new Category();
        $newCategory->name = $request->input('name');
        $newCategory->save();
        return back();
    }

    public function delete($id)
    {
        Category::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view("admin.category.edit", compact('category'));
    }

    public function update(Request $request, $id)
    {
        Category::validate($request);
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->save();
        return redirect()->route('admin.category.index');
    }
}
