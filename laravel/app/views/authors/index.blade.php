@extends('layouts.default')


@section('content')
	<h1> Author's Homepage </h1>
	<ul>
	@foreach($authors as $author)
		<li>{{ HTML::linkRoute("author", $author->name, array($author->id)) }}</li>
	@endforeach
	</ul>

	<p>{{ HTML::linkRoute("new_author", 'New Author' )}}</p>

	<?php
echo "<pre>";
print_r($authors);
echo "</pre>";
?>

@stop