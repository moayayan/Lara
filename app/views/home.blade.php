@extends('layout.main')

@section('content')
	@if(Auth::check())
	<p>Hello, {{ Auth::user()->username ,  ' (' , Auth::user()->email  , ' )'}}</p>
	@else
		@include('layout.landing-page')
	@endif


@stop