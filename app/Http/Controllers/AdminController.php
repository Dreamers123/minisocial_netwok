<?php

namespace App\Http\Controllers;
use App\User;
use App\Article;
use App\Fav_movie;
use foo\bar;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin');

    }


    public function index()
    {
        $users=User::all();
        $articles=Article::all();
        $movies=Fav_movie::all();
        return view('admin.home',compact('articles','movies','users'));
    }
    public function delete($id)
    {
        $user=User::findorFail($id);
        $user->delete();

        return back();

    }
    public function deletemovie($id)
    {
        $movie=Fav_movie::findorFail($id);
        $movie->delete();

        return back();

    }
    public function deletearticle($id)
    {
        $article=Article::findorFail($id);
        $article->delete();

        return back();

    }
    public function showusers()
    {
        $users=User::all();
        return view('admin.showusers',compact('users'));


    }
    public function showmovies()
    {
        $movies=Fav_movie::all();
        return view('admin.movies',compact('movies'));

    }
    public function showarticles()
    {
        $articles=Article::withTrashed()->paginate(10);
        return view('admin.articles',compact('articles'));
    }



}
