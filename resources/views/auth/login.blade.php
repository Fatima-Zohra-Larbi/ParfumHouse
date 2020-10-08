<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{  'Sign in' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    #blur{
        background: inherit;
 height: 100%;
 position: static;
    }
    #blur:before{
        margin-left: -15px;
        content: '';
 width: 100%;
 height: 100%;
 background: inherit; 
 position: absolute;
  box-shadow: inset 0 0 0 300px rgba(162, 160, 245, 0.3);
    }
</style>
<br>
<br>


<body style="  background-color: #f7f3f3;
">
<div class="container">
    <div class="row ">
    <div  class="col-md-5" style="background-image: url('img/ui.jpg'); background-size: cover;background-position: right; background-repeat: no-repeat;">
<div id="blur">
    <p style="position: absolute; font-size: 28px; color: white; top: 5%; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: bold; color: floralwhite;">The passionate adventure </p>
    <p style="position: absolute; font-size: 28px; color: white; top: 12%; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-weight: bold; left: 30%;color: floralwhite;"> begins with a <span style="font-size: 35px; color: #467dc0;">spray</span> </p>
<img src="img/logo.png" style=" bottom: 1px; height: 120px; position: absolute;left: 2%;">
</div>

</p>
        </div>
        <div class="col-md-7">
            <div class="card">
            <div style="font-weight: bold; font-size: 20px; padding-left: 20px;padding-top: 10px;">{{ __('Log In') }}</div>
            <hr style="width: 15%; margin-left: 15px; background-color: #467dc0; height: 2px;">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" style="background: url(img/mail.png) ;background-size:20px ;background-repeat: no-repeat; 
                                padding-left:30px; background-position-y: center;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" style="background: url(img/password.png) ;background-size:20px ;background-repeat: no-repeat;background-position-y: center; 
                                padding-left:30px;"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link"  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                           
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="width: 50%; background-color: #467dc0; border-radius: 20px;">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
