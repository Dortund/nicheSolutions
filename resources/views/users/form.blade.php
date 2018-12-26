<?php
/*
 * Variables:
 * 1. $user - (optional) the user whose data should be preloaded in the form
 * 2. $route - the route to submit the form to
 * 3. $method - the method to submit: POST/GET/PUT
 * 4. $submitBtn - The text for the submit button
 */

use App\User;
?>
<div class="card">
	<div class="card-body">
		<form method="{{ (strtoupper($method) == 'GET') ? 'GET' : 'POST' }}" action="{{ $route }}">
		{{ csrf_field() }}
		{{ method_field($method) }}

			<div class="form-group row">
				<label for="name" class="col-sm-4 col-form-label text-md-right">{{ trans('admin/users.cols.name') }}</label>

				<div class="col-md-6">
					<input id="name" type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" value="{{ isset($user) ? $user->name : old('name') }}" required autofocus>

					@if ($errors->has('name'))
						<span class="invalid-feedback">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
					@endif
				</div>
			</div>

			<div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label text-md-right">{{ trans('admin/users.cols.email') }}</label>

				<div class="col-md-6">
					<input id="email" type="email" class="form-control @if($errors->has('email')) is-invalid @endif" name="email" value="{{ isset($user) ? $user->email : old('email') }}" required>

					@if ($errors->has('email'))
						<span class="invalid-feedback">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
			</div>

			<div class="form-group row">
				<label for="password" class="col-sm-4 col-form-label text-md-right">{{ trans('admin/users.cols.password') }}</label>

				<div class="col-md-6">
					<input id="password" type="password" class="form-control @if($errors->has('password')) is-invalid @endif" name="password" value="">

					@if ($errors->has('password'))
						<span class="invalid-feedback">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
					@endif
				</div>
			</div>

			<div class="form-group row">
				<label for="passwordConfirmation" class="col-sm-4 col-form-label text-md-right">{{ trans('admin/users.cols.password-confirmation') }}</label>

				<div class="col-md-6">
					<input id="passwordConfirmation" type="password" class="form-control @if($errors->has('password_conformation')) is-invalid @endif" name="password_conformation" value="">

					@if ($errors->has('password_conformation'))
						<span class="invalid-feedback">
							<strong>{{ $errors->first('password_conformation') }}</strong>
						</span>
					@endif
				</div>
			</div>


			<div class="form-group row mb-0">
				<div class="col-md-8 offset-md-4">
					<button type="submit" class="btn btn-primary">
						{{ $submitBtn }}
					</button>
				</div>
			</div>

		</form>

	</div>
</div>
