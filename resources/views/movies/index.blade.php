

@extends('layouts.app')

@section('content')
    @forelse($fav_movies as $fav_movie)
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <div class="panel panel-default">
                    <div class="panel-heading">
                        <span><b>{{ $fav_movie->user->name }}</b></span>
                        <span class="pull-right">{{ $fav_movie->created_at->diffForHumans() }}</span>
                    </div>
                       <div class="panel-body">
                    <div class="thumbnail">
                        <a href="{{ $fav_movie->image_link }}">
                            <img src="{{ $fav_movie->image_link }}" alt="Lights" style="width:100%; height:150px;">
                            <div class="caption">
                                <p>{{ $fav_movie->name  }}.</p>
                            </div>
                        </a>

                <p>{{ $fav_movie->shortContent }}</p>
                <a href="/movies/{{ $fav_movie->id }}">read more</a>
                    </div>
                    </div>
                </div>
                </div>
                @empty
                    <h1 style="margin-left: 300px;font-size:100px"> Nothing to Show</h1>
                @endforelse
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-2 "> </div>
            {{ $fav_movies->links() }}
        </div>
@endsection