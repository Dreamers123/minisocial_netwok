@extends('layouts.app')

@section('content')
 <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<span>Created By {{ $article->user->name }}</span>
                    <span class="pull-right">{{ $article->created_at->diffForHumans() }}</span>
                </div>
                 
                <div class="panel-body">
                 {{ $article->content }}
            </div>
         </div>
        </div>
 </div>
 <hr>
 <div class="row">
     <div class="col-md-6 col-md-offset-3">
         <ul class="list-group">
             @foreach($article->comments as $comments)

                 <li class="list-group-item">
                     <div class="panel-heading">
                         {{ $comments->user->name }}
                     </div>

                     <p>{{ $comments->body }} <span class="pull-right"> {{ $comments->created_at->diffForHumans() }}</span>

                         <a href="#" class="pull-right"></a>
                     </p>
                 </li>
             @endforeach
         </ul>
     </div>
 </div>
 <hr>
 <br>
 <div class="row">
         <div class="col-md-6 col-md-offset-3">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <span>Make a comment</span>
                 <form action="/articles/{{$article->id}}/comments" method="POST">

                 {{ csrf_field() }}

                     <div class="form-group">
                         <label for="body"></label>
                         <textarea id="body" class="form-control" name="body" required></textarea>
                     </div>

                  <button type="submit" class="btn btn-default">Publish</button>
                  </form>
                 </div>
             </div>
         </div>
 </div>
 </div>


@endsection