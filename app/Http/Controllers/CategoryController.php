<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $Categories = Category::orderBy('id', 'desc')->get();
        return view('admin.pages.category.list', compact('Categories'));
    }

    public function add()
    {
        return view('admin.pages.category.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|max:150',

        ]);
        $name = $request->name;

        $category = new Category;

        $category->name = $name;

        $category->save();

        return redirect()->route('category.index');
    }
}
