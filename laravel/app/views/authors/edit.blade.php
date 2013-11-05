@extends('layouts.default')
<h1>Editing {{$author->name}}</h1>

@section('content')

{{Form::open(array('url'=>'author/update','method'=>'PUT'))}}

<p>
	{{Form::label('name','Name:')}}<br />
	{{Form::text('name', $author->name)}}
</p>
<p>
	{{Form::label('bio','Biography:')}}<br />
	{{Form::textarea('bio', $author->bio)}}
</p>
<p>
	{{Form::hidden('id', $author->id)}}
</p>
<p>{{Form::submit('Edit Author')}}</p>
{{Form::close()}}



@stop