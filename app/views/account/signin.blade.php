@extends('layout.main')


@section('content')
	<form action="{{ URL::route('account-sign-in-post')}}" method="post">
		<div class="field row">
			<div class="col-xs-4">
				<div class="col-xs-8">
				<input type="text" class="form-control" name="email" placeholder="Email" {{ (Input::old('email')) ? ' value="' . Input::old('email') . '"' : '' }} required>
				</div>
				@if($errors->has('email'))
				{{ $errors->first('email') }}
				@endif
			</div>
		</div>
		<div class="field row">
			<div class="col-xs-4">
				<div class="col-xs-8 ">
				<input type="password" class="form-control" placeholder="Password" name="password" required>
				</div>
				@if($errors->has('password'))
				{{ $errors->first('password') }}
				@endif
			</div>
		</div>

		<div class="field">
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">
				Remember me
			</label>
		</div>
		
		<div class="row field button">
			<input class="btn btn-primary" type="submit" value="Signin">
			{{ Form::token()}}
		</div>
	</form>

@stop

@extends('layout.footer')