@extends('layouts.app')

@section('content')
<style>
.main img
{
width: 300px;
height: 250px;
}

.main img:hover 
{
filter: grayscale(100%);
transform: scale(1.1);
}

</style>
	<div class="row">
	<div class="col-md-8 col-sm-8">
	<h1>Posts</h1>
	</div>
	<div class="col-md-4 col-sm-4">
		<form action="search" method="get">
			<div class="input-group">
				<input type="text" name="search" value="{{ request('search') }}" placeholder="Search Here" class="form-control">
				<div class="input-group-btn">
				<button type="submit" class="btn btn-primary">Search</button>
				</div>
			</div>
		</form>
	</div>
	</div>
	@if(count($posts) > 0)
	@foreach($posts as $post)
		<div class="well">
			<div class="row">
				<div class="col-md-4 col-sm-4 main">
					<img src="public/storage/cover_images/{{$post->cover_image}}">
				</div>
				<div class="col-md-8 col-sm-8">
					<h3><a href="posts/{{$post->id}}"> {{$post->title}} </a></h3>
					<small>Written on {{$post->created_at}} by {{$post->user->name}}</small><br><br>
					<a style="font-size: 30px; width: 50px;" href="www.facebook.com" class="fa fa-facebook"></a>
					<a style="font-size: 30px; width: 50px; color: green;" href="#" class="fa fa-android"></a>
					<a style="font-size: 30px; width: 50px; color: red;" href="#" class="fa fa-youtube"></a>
					<a style="font-size: 30px; width: 50px; color: pink;" href="#" class="fa fa-instagram"></a>
				</div>
			</div>
		</div>
	@endforeach
			{{$posts->links()}}
	@else
		<p>No Posts Found</p>
	@endif
@endsection