@extends('layouts.app')

@section('content')
 <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Create Articles
                </div>

                <div class="panel-body">
                <form action="/articles" method="POST">
                
                {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"></input>
             
                    <div class="form-group">
                	<label for="content">Content</label>
                	<textarea name="content" class="form-control"></textarea>
                	</div>
                	<div class="checkbox">
                	<label>
                		<input type="checkbox" name="live">
                			Live
                		</input>
                	</label>
                	</div>
                	<div class="form-group">
                	<label for="post_on">
                		Post On
                		<input type="datetime-local" class="form-control" name="post_on">
                	</label>
                		
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