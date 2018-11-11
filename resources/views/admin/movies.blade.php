@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped" style="padding-right: 2%">
                        <thead>
                        <tr style="text-align: center">
                            <th class="col-md-2 text-center">Movies</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($movies as $movie)
                            <tr>
                                <td>{{$movie->name}}
                                    <form action="/movie/{{ $movie->id }}" method="POST">


                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger pull-right">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection