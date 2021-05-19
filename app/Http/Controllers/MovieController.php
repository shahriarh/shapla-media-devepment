<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movie = Movie::orderBy('id', 'desc')->get();
        return view('admin.pages.movie.list', compact('movie'));
    }

    public function add()
    {
        $category = Category::orderBy('id', 'desc')->get();
        return view('admin.pages.movie.create', compact('category'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|max:150',
            'description'       => 'nullable',
            'category_id'       => 'nullable',
            'link'              => 'nullable',
            'potraitimage'      => 'nullable',

            'landscapeimage'    => 'nullable',
            'movie-details'    => 'nullable',
            'ratings'    => 'nullable',
            'release_date'    => 'nullable',
            'ratings'    => 'nullable',



        ]);
        $name = $request->name;
        $description = $request->description;

        $category_id = $request->category_id;
        $link = $request->link;

        $movie_details = $request->movie_details;
        $ratings = $request->ratings;
        $release_date = $request->release_date;

        $potraitimage = $request->potraitimage;
        $landscapeimage = $request->landscapeimage;



        $movie = new Movie;

        $movie->name = $name;
        $movie->description = $description;
        $movie->category_id = $category_id;
        $movie->link = $link;
        $movie->movie_details = $movie_details;
        $movie->ratings = $ratings;
        $movie->release_date = $release_date;
        // $movie->potraitimage = $potraitimage;
        // $movie->landscapeimage = $landscapeimage;


        if ($request->hasFile('potraitimage')) {
            // dd($request);
            $photo  = rand() . $request->file('potraitimage')->getClientOriginalName();
            $destination  = 'uploads/ptmovie';
            $request->file('potraitimage')->move($destination, $photo);

            $movie->potraitimage   = $destination . '/' . $photo;
        }

        if ($request->hasFile('landscapeimage')) {
            // dd($request);
            $photo  = rand() . $request->file('landscapeimage')->getClientOriginalName();
            $destination  = 'uploads/lsmovie';
            $request->file('landscapeimage')->move($destination, $photo);

            $movie->landscapeimage   = $destination . '/' . $photo;
        }



        $movie->save();

        return redirect()->route('movie.index');
    }
}
