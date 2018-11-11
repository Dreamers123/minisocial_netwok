
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="padding-right: 2%">
        @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <h2>Article details</h2>
        <table class="table table-striped" style="padding-right: 2%">
            <thead>
            <tr style="text-align: center">
                <th class="col-md-2">Created By</th>
                <th></th>
                <th>Contents of the article</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $article)
                <tr>
                    <td>{{$article->user->name}}</td>
                    <td></td>
                    <td>{{$article->content}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @if($details){!! $details->render() !!}@endif
    @elseif(isset($message))
        <p>{{ $message }}</p>
    @endif
</div>
    </div>
@endsection