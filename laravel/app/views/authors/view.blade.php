@extends('layouts.default')

@section('content')
	<h1>{{$author->name}}</h1>
	<p>{{$author->bio}}</p>
	<p><small>{{$author->updated_at}}</small></p>


	<span>
		{{ HTML::linkRoute("authors", 'Authors' )}} | 
		{{ HTML::linkRoute("edit", 'Edit', array($author->id)) }} | 
		{{Form::open(array('url'=>'author/delete','method'=>'delete'))}}
		{{Form::hidden('id', $author->id)}}
		{{Form::submit('Delete')}}
		{{FOrm::close()}}
	</span>
@stop