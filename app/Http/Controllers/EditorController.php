<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class EditorController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('editor',['except'=>'test']);
    }
    public function index()
    {
    	$articles=Article::all();
        return view('admin.editor',compact('articles'));
    }

    public function test()
    {
    	return view('admin.test');
    }

    public function update(Request $request, $id)
    {
        $article=Article::findOrFail($id);
        if( ! isset($request->live))
            $article->update(array_merge($request->all(),[
                'live'=> false]));

        $article->update($request->all());

        return redirect('/editor/articles');
    }

    public function showarticles()
    {
        $articles=Article::withTrashed()->paginate(10);
        return view('admin.showarticles',compact('articles'));
    }
    public function edit($id)
    {
        $article=Article::findOrFail($id);
        return view('admin.editor_edit', compact('article'));
    }
}
