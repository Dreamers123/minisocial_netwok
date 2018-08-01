@extends('layouts.app')
<style type="text/css">
	.pofile-img {
		max-width: 150px;
		border: 5px solid lightblue;
		border-radius: 100%;
		box-shadow: 0 2px 2px rgba(0,0,0,0.3);
	}

</style>
@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body text-center">
                @if(count($profile)==0)
                <img class="pofile-img" src="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-ginger-guy.png">
				@else
				<img class="pofile-img" src="{{ $profile->imagee_link }}">
				@endif
				<h1>{{ $user->name }}</h1>
				<h5>{{ $user->email }}</h5>
				<h5>{{ $user->dob->format('l j F Y') }} </h5>
				<h4>( {{ ($user->dob)->age }} years old ) </h4>
				@if(count($profile)==0)
				<button class="btn btn-primary">nickname</button>
				@else
				<button class="btn btn-primary">{{ $profile->nickname }}</button>
				@endif
					@if(count($profile)==0)
						<a href="peofile/create"><h4>Create the Profile first</h4></a>
					@else
				     <a href="{{ $profile->id}}/edit"><h4>Change the Profile Pic</h4></a>
						@endif
			</div>
			  
		</div>
	</div> 
</div>
@endsection