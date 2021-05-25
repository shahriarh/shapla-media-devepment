<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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


        $banner = new Banner;

        $banner->name = $name;
        $banner->description = $description;
        $banner->short_description = $short_description;
        $banner->year = $year;
        $banner->age_limit = $age_limit;
        //$category->image = $image;
        $banner->cinebazurl = $cinebazurl;
        $banner->trailler_button_url = $trailler_button_url;

        if ($request->hasFile('image')) {
            // dd($request);
            $photo  = rand() . $request->file('image')->getClientOriginalName();
            $destination  = 'uploads/banner';
            $request->file('image')->move($destination, $photo);

            $banner->image   = $destination . '/' . $photo;

            // Banner::findOrFail($id)->update([
            //     'image'       => $destination . '/' . $photo,
            // ]);
        }
        //$category->filename = json_encode($data);


        $banner->save();

        return redirect()->route('banner.index');
    }
    public function edit($id)
    {

        if (strlen($id) == 0) {
            return redirect()->back()->withErrors('No banner id found.');
        }

        $info__ = Banner::find($id);

        if (empty($info__)) {
            return redirect('banner.index')->withErrors('No banner information found.');
        }


        $data['info__'] = $info__;

        return view('admin.pages.banner.edit', $data);
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
        $description = $request->description;
        $short_description = $request->short_description;
        $year = $request->year;
        $age_limit = $request->age_limit;
        $image = $request->image;
        $cinebazurl = $request->cinebazurl;
        $trailler_button_url = $request->trailler_button_url;

        $banner = Banner::find($id);
        $banner->name = $name;
        $banner->description = $description;
        $banner->short_description = $short_description;
        $banner->year = $year;
        $banner->age_limit = $age_limit;
        //$banner->image = $image;
        $banner->cinebazurl = $cinebazurl;
        $banner->trailler_button_url = $trailler_button_url;


        $image  = $request->file('image');

        if ($image) {
            $photo = rand() . $request->file('image')->getClientOriginalName();
            $destination = 'uploads/user';
            $request->file('image')->move($destination, $photo);

            $photo     = $destination . '/' . $photo;
            $getUser = Banner::where('id', $request->id)->first();
            // delete the root image
            $image_path = $banner->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $banner_user = Banner::where('id', $request->id)
                ->update([
                    'image'  => $photo,
                ]);
        }

        $is_exists = Banner::where('name', $name)->where('id', '<>', $id)->count();
        if ($is_exists > 0) {
            return redirect()->back()->withErrors("Name already exists.");
        }



        if ($banner->save() == false) {
            return redirect()->back()->withErrors("A problem occur. Please try again.");
        }

        return redirect('banner')->with("success", "banner edited successfully.");
    }


    public function delete($id)
    {
        $banner = Banner::find($id);
        if (!is_null($banner)) {
            //Delete Image
            if (File::exists('uploads/banner/' . $banner->image)) {
                File::delete('uploads/banner/' . $banner->image);
            }
            $banner->delete();
        }
        return redirect('banner')->with("success", "banner deleted successfully.");
    }
}
