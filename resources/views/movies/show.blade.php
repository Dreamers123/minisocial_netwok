@extends('layouts.app')

@section('content')

    <div class="row" style="background-image: url('https://previews.123rf.com/images/kritchanut/kritchanut1502/kritchanut150200088/36161539-light-wood-texture-background.jpg')">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>{{ $fav_movies->name }}</span>
                    <span class="pull-right">{{ $fav_movies->created_at->diffForHumans() }}</span>
                </div>

                <div class="panel-body">
                    {{ $fav_movies->details }}
                   <hr>
                    <p> Favourite qoute of the movie </p>

                            <blockquote>
                            <p>{{ $fav_movies->quote }}</p>
                            <footer>{{ $fav_movies->name }}</footer>
                            </blockquote>
                   <hr>
                    <div class="text-center">
                        <iframe width="560" height="315" src="{{ $fav_movies->trailers }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                        <span class="pull-right"><a href="/movies/{{ $fav_movies->id }}/edit"> Edit</a></span>
            </div>
        </div>
     </div>
    </div>
@endsection