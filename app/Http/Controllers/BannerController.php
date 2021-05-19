<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::orderBy('id', 'desc')->get();
        return view('admin.pages.banner.list', compact('banner'));
    }

    public function add()
    {
        return view('admin.pages.banner.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|max:150',
            'description'         => 'nullable',
            'short_description'         => 'nullable',
            'year'         => 'nullable',

            'age_limit'         => 'nullable',
            'image'         => 'nullable',
            'cinebazurl'         => 'nullable',
            'trailler_button_url'         => 'nullable',


        ]);
        $name = $request->name;
        $description = $request->description;
        $short_description = $request->short_description;
        $year = $request->year;
        $age_limit = $request->age_limit;
        $image = $request->image;
        $cinebazurl = $request->cinebazurl;
        $trailler_button_url = $request->trailler_button_url;


        $category = new Banner;

        $category->name = $name;
        $category->description = $description;
        $category->short_description = $short_description;
        $category->year = $year;
        $category->age_limit = $age_limit;
        //$category->image = $image;
        $category->cinebazurl = $cinebazurl;
        $category->trailler_button_url = $trailler_button_url;

        if ($request->hasFile('image')) {
            // dd($request);
            $photo  = rand() . $request->file('image')->getClientOriginalName();
            $destination  = 'uploads/banner';
            $request->file('image')->move($destination, $photo);

            $category->image   = $destination . '/' . $photo;

            // Banner::findOrFail($id)->update([
            //     'image'       => $destination . '/' . $photo,
            // ]);
        }
        //$category->filename = json_encode($data);


        $category->save();

        return redirect()->route('banner.index');
    }
}
