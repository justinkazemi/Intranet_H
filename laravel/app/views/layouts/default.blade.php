<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
</head>
<body>
	this is change
	@if(Session::has("message"))
		<p>{{Session::get('message')}}</p>
	@endif
	@yield('content')
</body>
</html>