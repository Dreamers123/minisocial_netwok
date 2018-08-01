@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Profile
                </div>

                <div class="panel-body">
                    <form action="/profile/{{ $profile->id }}" method="POST">

                        {{ method_field('put') }}
                        {{ csrf_field() }}

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"></input>

                        <div class="form-group">
                            <label for="imagee_link">Image Link</label>
                            <textarea name="imagee_link" class="form-control"> {{ $profile->imagee_link }}</textarea>
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