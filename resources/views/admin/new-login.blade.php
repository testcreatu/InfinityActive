<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('public/admin/login.css')}}">
</head>
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="{{url('public/images/logo.jpg')}}" class="image" style="height: 350px;"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row px-3"> 
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Email Address</h6>
                            </label> 
                            <input id="email" type="email" class="mb-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            
                        </div>
                        
                        <div class="row px-3"> 
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Password</h6>
                            </label> 
                            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Enter Password" class="@error('password') is-invalid @enderror">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="custom-control custom-checkbox custom-control-inline"> 
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label text-sm" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </div> 
                            @if (Route::has('password.request'))
                                    <a class="ml-auto mb-0 text-sm" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            @endif
                        </div>
                        <div class="row mb-3 px-3"> 
                            <button type="submit" class="btn btn-blue text-center">
                                    {{ __('Login') }}
                            </button>
                        </div>
                        <!-- <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small> </div> -->
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>