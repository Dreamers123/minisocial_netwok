@extends('layouts.app')

@section('content')
       <div class="text-center" style="margin-left: 17%">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                    <h3 class="panel-title">Website Overview</h3>
                </div>

                <div class="panel-body">
                    <a href="users">
                    <div class="col-md-4">
                        <div class="well dash-box">
                            <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  {{ count($users) }}</h2>
                            <h4>Users </h4>
                        </div>
                    </div>
                    </a>
                    <a href="movies">
                    <div class="col-md-4 ">
                        <div class="well dash-box">
                            <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>  {{count($movies)}} </h2>
                            <h4>Movies</h4>
                        </div>
                    </div>
                    </a>
                    <a href="articles">
                    <div class="col-md-4">
                        <div class="well dash-box">
                            <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{ count($articles) }}</h2>
                            <h4>Articles</h4>
                        </div>
                    </div>
                    </a>
                </div>
           </div>
        </div>
       </div>
@endsection
