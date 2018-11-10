@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Upload your Favourite movies
                </div>

                <div class="panel-body">
                    <form action="/movies" method="POST">

                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"></input>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <textarea name="name" class="form-control"> </textarea>
                        </div>

                        <div class="form-group">
                            <label for="details">Details</label>
                            <textarea name="details" class="form-control"> </textarea>
                        </div>

                        <div class="form-group">
                            <label for="casts">Casts</label>
                            <textarea name="casts" class="form-control"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="image_link">Image Link</label>
                            <textarea name="image_link" class="form-control"> </textarea>
                        </div>

                        <div class="form-group">
                            <label for="quote">Quote</label>
                            <textarea name="quote" class="form-control"> </textarea>
                        </div>

                        <div class="form-group">
                            <label for="trailers">Trailer Link</label>
                            <textarea name="trailers" class="form-control"> </textarea>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-success pull-right">
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
@endsection
