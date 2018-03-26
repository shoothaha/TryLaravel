@extends('layout')

@section('content')
	
	<h1>All Posts</h1>


	@foreach ($posts as $post)

		<h2>{{ $post->title }}</h2>

		<p>{{ $post->content }}</p>

	@endforeach

@stop