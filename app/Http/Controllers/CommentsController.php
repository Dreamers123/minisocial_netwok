<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Article;
use Auth;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Article $article)
    {
        $this->validate(request(),[
            'body'=>'required|min:2'
        ]);

        Comment::create ([
            'body'=>request('body'),
            'article_id' => $article->id,
            'user_id' => Auth::user()->id

        ]);
        // $user->notes()->save($note);
        //return $request->all();
        // $cards->notes()->create($request->all());
        return back();
    }
   /* public function edit(Notes $note)
    {
        return view('notes.edit',compact('note'));
    }
    public function update(Request $request,Notes $note)
    {
        $note->update($request->all());

        return back();
    }
   */
}
