@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editor Dashboard</div>

                    <div class="panel-body text-center">
                        <a href="/editor/articles">
                            <div class="col-md-12 ol-md-offset-2 text-center">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  {{ count($articles) }}</h2>
                                    <h4>Articles </h4>
                                </div>
                            </div>
                        </a>
                </div>
            </div>
        </div>
    </div>
@endsection
