@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body text-center">

                    <form action="/profile" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="imagee_link">Profile Pic</label>
                            <input type="text" name="imagee_link" class="form-control"> {{old('imagee_link')}}</input>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control"> {{old('city')}}</input>
                        </div>
                        <div class="form-group">
                            <label for="details">Short description of the City</label>
                            <input type="text" name="details" class="form-control"> {{old('details')}}</input>
                        </div>
                        <div class="form-group">
                            <label for="nickname">Nick-Name</label>
                            <input type="text" name="nickname" class="form-control"> {{old('nickname')}}</input>
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