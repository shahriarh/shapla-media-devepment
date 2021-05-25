<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
    public function edit($id)
    {

        //return Redirect::to('customer')->with('success','Currently This Feature disable by admin..');

        if (strlen($id) == 0) {
            return redirect()->back()->withErrors('No movie id found.');
        }

        $info__ = Movie::find($id);
        $categories = Category::orderBy('id', 'desc')->get();

        if (empty($info__)) {
            return redirect('movie.index')->withErrors('No movie information found.');
        }


        $data['info__'] = $info__;
        $data['categories'] = $categories;

        return view('admin.pages.movie.edit', $data);
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
        $category_id = $request->category_id;
        $description = $request->description;
        $link = $request->link;

        $potraitimage = $request->potraitimage;
        $landscapeimage = $request->landscapeimage;
        $movie_details = $request->movie_details;
        $ratings = $request->ratings;
        $release_date = $request->release_date;

        $movie = Movie::find($id);
        $movie->name = $name;
        $movie->category_id = $category_id;
        $movie->description = $description;
        $movie->link = $link;
        $movie->potraitimage = $potraitimage;
        $movie->landscapeimage = $landscapeimage;
        //$banner->image = $image;
        $movie->movie_details = $movie_details;
        $movie->ratings = $ratings;
        $movie->release_date = $release_date;


        $potraitimage  = $request->file('potraitimage');

        if ($potraitimage) {
            $photo = rand() . $request->file('potraitimage')->getClientOriginalName();
            $destination = 'uploads/ptmovie';
            $request->file('potraitimage')->move($destination, $photo);

            $photo     = $destination . '/' . $photo;
            $getMovie = Movie::where('id', $request->id)->first();
            // delete the root image
            $image_path = $movie->potraitimage;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $movie_user = Movie::where('id', $request->id)
                ->update([
                    'potraitimage'  => $photo,
                ]);
        }

        $landscapeimage  = $request->file('landscapeimage');

        if ($landscapeimage) {
            $photo = rand() . $request->file('landscapeimage')->getClientOriginalName();
            $destination = 'uploads/lsmovie';
            $request->file('landscapeimage')->move($destination, $photo);

            $photo     = $destination . '/' . $photo;
            $getMovie = Movie::where('id', $request->id)->first();
            // delete the root image
            $image_path = $movie->potraitimage;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $movie_user = Movie::where('id', $request->id)
                ->update([
                    'potraitimage'  => $photo,
                ]);
        }

        $is_exists = Movie::where('name', $name)->where('id', '<>', $id)->count();
        if ($is_exists > 0) {
            return redirect()->back()->withErrors("Name already exists.");
        }



        if ($movie->save() == false) {
            return redirect()->back()->withErrors("A problem occur. Please try again.");
        }

        return redirect('movie')->with("success", "movie edited successfully.");
    }
    public function delete($id)
    {
        $movie = Movie::find($id);
        if (!is_null($movie)) {
            //Delete Image
            if (File::exists('uploads/banner/' . $movie->image)) {
                File::delete('uploads/banner/' . $movie->image);
            }
            $movie->delete();
        }
        return redirect('movie')->with("success", "movie deleted successfully.");
    }
}
