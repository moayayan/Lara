<!DOCTYPE html>
<html lang="en">
<head>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootflat.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/landing-page.css') }}

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Payment BETA</title>
</head>
<body>
	@if(Session::has('global'))
		<p>{{Session::get('global')}}</p>
	@endif
	
	@include('layout.navigation')
	
	@yield('content')

@extends('layout.footer')
</body>
</html>