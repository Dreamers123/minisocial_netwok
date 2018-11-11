@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">Editor Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped" style="padding-right: 2%">
                        <thead>
                        <tr style="text-align: center">
                            <th class="col-md-2 text-center">Articles</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->content}}
                                    <form action="article/{{ $article->id }}/edit" method="POST">


                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <button class="btn btn-primary pull-right">EDIT</button>
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
    <div class="col-md-2 col-md-offset-2 "> </div>
    {{ $articles->links() }}
    </div>
@endsection