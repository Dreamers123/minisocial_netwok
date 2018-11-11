@extends('layouts.app')

@section('content')
    <body style="background-image: url('http://atgbcentral.com/data/out/32/4174767-beautiful-background-images.jpg')">

        <div class="col-md-8 col-md-offset-2" style="margin-bottom: 3%">
            <form action="/article_search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="q"
                           placeholder="Search Articles"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
                </div>
            </form>
        </div>
     <div class="row">
        @forelse($articles as $article)
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                
                <span>{{ $article->user->name }}, Edited by {{ $name }}</span>
                <span class="pull-right">{{ $article->created_at->diffForHumans() }}</span>

                </div>

                <div class="panel-body">
                {{ $article->shortContent }}
                 <a href="/articles/{{ $article->id }}">read more</a>
                    @if($article->user_id==Auth::id())
                 <span class="pull-right"><a href="/articles/{{ $article->id }}/edit"> Edit
                 </a></span>
                   @endif
                 @if($article->user_id==Auth::id())
                 <form action="/articles/{{ $article->id }}" method="POST">

                
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                 <button class="btn btn-danger pull-right" style="margin-top:4px">Delete</button>
                 @endif
                 </form>
                </div>
                        
        </div>
    </div>
     @empty
     <span>No articles</span>
     @endforelse
     <div class="row">
     <div class="col-md-2 col-md-offset-2 "> </div>
     	{{ $articles->links() }}
     </div>
</div>
    </body>
@endsection