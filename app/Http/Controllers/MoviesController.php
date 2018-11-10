<?php

namespace App\Http\Controllers;
use App\Fav_movie;
use Illuminate\Http\Request;
use Auth;
class MoviesController extends Controller
{

    public function index()
    {
        $fav_movies=Fav_movie::paginate(12);
        return view('movies.index',compact('fav_movies'));
    }


    public function create()
    {
        return view('movies.create');
    }


    public function store(Request $request)
    {
        $fav_movie= new Fav_movie;


        $fav_movie->user_id=Auth::user()->id;
        $fav_movie->name=$request->name;
        $fav_movie->details=$request->details;
        $fav_movie->casts=$request->casts;
        $fav_movie->image_link=$request->image_link;
        $fav_movie->quote=$request->quote;
        $fav_movie->trailers=$request->trailers;

        $fav_movie->save();
        return redirect('/movies/');
    }


    public function show($id)
    {
        $fav_movies=Fav_movie::findOrFail($id);
        return view('movies.show', compact('fav_movies'));
    }


    public function edit($id)
    {
        $fav_movies=Fav_movie::findOrFail($id);

        return view('movies.edit', compact('fav_movies'));
    }


    public function update(Request $request, $id)
    {
        $fav_movies=Fav_movie::findOrFail($id);

        $fav_movies->update($request->all());
        return redirect('/movies/');

    }


    public function destroy($id)
    {
        //
    }
}
