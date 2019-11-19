@extends('layouts.app')

@section('content')
	<a href="http://localhost/laravel/posts" class="btn btn-success">Go Back</a>
	<h1>{{$post->title}}</h1>
	<div class="col-md-6 col-sm-6">
	<img style="width:700px" src="http://localhost/laravel/public/storage/cover_images/{{$post->cover_image}}" class="img-thumbnail">
	</div>
	<div class="col-md-6 col-sm-6">
		<blockquote class="blockquote-reverse">
		{!!$post->body!!}
		<footer>Written on {{$post->created_at}} by {{$post->user->name}}</footer>
		</blockquote>
	</div>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a href="http://localhost/laravel/posts/{{$post->id}}/edit" class="btn btn-danger">Edit</a>
			{!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=> 'POST', 'class' => 'pull-right'])!!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete', ['class'=>'btn btn-primary'])}}
			{!!Form::close() !!}
		@endif
	@endif
@endsection