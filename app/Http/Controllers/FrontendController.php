<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Movie;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $mdata['slider'] = Banner::orderBy('id', 'desc')->get();
        $mdata['media'] = Movie::orderBy('id', 'desc')->get();
        return view('frontend.pages.home')->with($mdata);
    }
    public function media()
    {
        $mdata['slider'] = Banner::orderBy('id', 'desc')->get();
        $mdata['trendy'] = Movie::orderBy('id', 'desc')->get();
        $mdata['new'] = Movie::orderBy('id', 'desc')->get();
        $mdata['media'] = Movie::orderBy('id', 'desc')->get();
        return view('frontend.pages.movies')->with($mdata);
    }

    public function allmovie()
    {
        $mdata['slider'] = Banner::orderBy('id', 'desc')->get();
        $mdata['trendy'] = Movie::orderBy('id', 'desc')->get();
        $mdata['new'] = Movie::orderBy('id', 'desc')->get();
        $mdata['media'] = Movie::orderBy('id', 'desc')->first();
        return view('frontend.pages.allmovies')->with($mdata);
    }

    public function view($id)
    {

        if (strlen($id) == 0) {
            //return Redirect::to('company')->withErrors('No company  id found.');
            return redirect()->route('frontend.home');
        }

        $info__ = Movie::find($id);

        if (empty($info__)) {
            return redirect()->route('frontend.home');
            //return Redirect::to('company')->withErrors('No company  information found.');
        }


        $data['info__'] = $info__;
        return view('frontend.pages.detail', $data);
    }

    public function about()
    {

        $banner['slider'] = Banner::orderBy('id', 'desc')->get();
        $banner['about'] = About::orderBy('id', 'desc')->first();
        return view('frontend.pages.about')->with($banner);
    }
    public function contact()
    {
        $banner['slider'] = Banner::orderBy('id', 'desc')->get();
        return view('frontend.pages.contact',)->with($banner);
    }
}
