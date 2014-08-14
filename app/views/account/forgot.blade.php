@extends('layout.main')

@section('content')
	<form action="{{ URL::route('account-forgot-password-post') }}" method="post">
		<div class="field row">
			<div class="col-xs-4">
				<input class="form-control" type="text" name="email" placeholder="E-mail" {{ e(Input::old('email')) ? ' value ="' . Input::old('email') . '"' : '' }}>
				@if($errors->has('email'))
					{{ $errors->first('email') }}
				@endif
			</div>
		</div>
		

		<div class="button">
			<div class="col-xs-4">
				<input class="btn btn-success" type="submit" value="Recover" >
				{{ Form::token() }}
			</div>
		</div>
	</form>
@stop