@extends('home-master')



@section('content')

<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="{{url('public/images/logo.jpg')}}" class="brand_logo" alt="Logo">
				</div>
			</div>
			<div class="d-flex justify-content-center form_container">
				<form action="{{url('vendor-login-submit')}}" method="post">
					@csrf
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="email" class="form-control input_user" value="" placeholder="username">
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
					</div>
					<div class="d-flex justify-content-center mt-3 login_container">
						<button type="submit" name="button" class="btn login_btn">Login</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

@endsection