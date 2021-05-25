<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::orderBy('id', 'desc')->get();
        return view('admin.pages.about.list', compact('about'));
    }

    public function add()
    {
        return view('admin.pages.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'metadescription'         => 'required|max:150',

        ]);
        $metadescription = $request->metadescription;
        $meta_title = $request->meta_title;
        $description = $request->description;
        $message = $request->message;
        $mission = $request->mission;
        $vision = $request->vision;

        $about = new About();

        $about->metadescription = $metadescription;
        $about->meta_title = $meta_title;
        $about->description = $description;
        $about->message = $message;
        $about->mission = $mission;
        $about->vision = $vision;

        $about->save();

        return redirect()->route('about.index');
    }
    public function edit($id)
    {

        //return Redirect::to('customer')->with('success','Currently This Feature disable by admin..');

        if (strlen($id) == 0) {
            return redirect()->back()->withErrors('No about id found.');
        }

        $info__ = About::find($id);

        if (empty($info__)) {
            return redirect('about.index')->withErrors('No about information found.');
        }


        $data['info__'] = $info__;

        return view('admin.pages.about.edit', $data);
    }
}
