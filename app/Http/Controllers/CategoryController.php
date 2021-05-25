<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

    public function edit($id)
    {

        //return Redirect::to('customer')->with('success','Currently This Feature disable by admin..');

        if (strlen($id) == 0) {
            return redirect()->back()->withErrors('No category id found.');
        }

        $info__ = Category::find($id);

        if (empty($info__)) {
            return redirect('category.index')->withErrors('No category information found.');
        }


        $data['info__'] = $info__;

        return view('admin.pages.category.edit', $data);
    }

    public function editSubmit($id, Request $request)
    {
        $this->validate(
            $request,
            [
                'name'         => 'required|max:100',

            ],
            [
                'name.required'         => 'Please provide a valid name',


            ]
        );

        $name = $request->name;


        $category = Category::find($id);
        $category->name = $name;


        $is_exists = Category::where('name', $name)->where('id', '<>', $id)->count();
        if ($is_exists > 0) {
            return redirect()->back()->withErrors("Name already exists.");
        }



        if ($category->save() == false) {
            return redirect()->back()->withErrors("A problem occur. Please try again.");
        }

        return redirect('category')->with("success", "category edited successfully.");
    }


    public function delete($id)
    {
        //    dd($id);
        $category = Category::where('id', $id)->delete();

        return redirect('category')->with('success', 'category has deleted successfully.');
    }
}
