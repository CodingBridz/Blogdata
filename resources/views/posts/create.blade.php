@extends('layouts.app')

@section('content')

	<h1>Create Posts</h1>
	{!! Form::open(['action' => 'PostController@store', 'method'=> 'POST', 'enctype' => 'multipart/form-data']) !!}
    	<div>
    		{{Form::label('title' , 'Title')}}
    		{{Form::text('title' , '' , ['class' => 'form-control','placeholder'=>'Title'])}}
    	</div><br>
    	<div>
    		{{Form::label('body' , 'Body')}}
    		{{Form::textarea('body' , '' , ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder'=>'Body Text'])}}
    	</div><br>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
	
@endsection