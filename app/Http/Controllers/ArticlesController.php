<?php

namespace App\Http\Controllers;
use App\Article;
use Auth;
use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Input;
class ArticlesController extends Controller
{
    
    public function index(Article $articles)
    {
        $articles=Article::withTrashed()->paginate(10);
        //return $articles;

        return view('articles.index', compact('articles'));
    }

    
    public function create()
    {
        return view('articles.create');
    }

    
    public function store(Request $request)
    {
        //return $request->all();
        
       /* $article= new Article;


        $article->user_id=Auth::user()->id;
        $article->content=$request->content;
        $article->live=(boolean)$request->live;
        $article->post_on=$request->post_on;

        $article->save();
        */
       Article::create($request->all());
       return redirect('/articles');

    }

    
    public function show($id)
    {
        $article=Article::findOrFail($id);
        return view('articles.show',compact('article'));
    }

    
    public function edit($id)
    {
        $article=Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    
    public function update(Request $request, $id)
    {
        $article=Article::findOrFail($id);
        if( ! isset($request->live))
            $article->update(array_merge($request->all(),[
                'live'=> false]));
        
        $article->update($request->all());

        return redirect('/articles');
    }

    
    public function destroy($id)
    {
        //$article=Article::findOrFail($id);
        //$article->delete();
         Article::destroy($id);
        return redirect('/articles');
    }
    public function tryit()
    {
        $articles=Article::where('user_id','=',9)->get();

        return $articles;
    }
    public function search()
    {
        $q = Input::get( 'q' );
        if($q != ""){
            $article = Article::where ( 'content', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
            $pagination = $article->appends ( array (
                'q' => Input::get ( 'q' )
            ) );
            if (count ( $article ) > 0)
                return  view ( 'articles.search' )->withDetails ( $article )->withQuery ( $q );
        }

        return view ( 'articles.search' )->withMessage ( 'No Details found. Try to search again !' );
    }

}
