<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{  'Sign up' }}</title>

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
    <div class="container" >
    <div class="row">
        <div  class="col-md-5" style="background-image: url('img/ui.jpg'); background-size: cover;background-position: right; background-repeat: no-repeat;">
<div id="blur">
    <p style="position: absolute; font-size: 32px; color: white; top: 5%; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: bold; color: floralwhite;">The passionate adventure </p>
    <p style="position: absolute; font-size: 32px; color: white; top: 12%; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-weight: bold; left: 30%;color: floralwhite;"> begins with a <span style="font-size: 40px; color: #467dc0;">spray</span> </p>
<img src="img/logo.png" style=" bottom: 1px; height: 120px; position: absolute;left: 2%;">
</div>

</p>
        </div>
        <div class="col-md-7" >
            <div class="card">
                <div style="font-weight: bold; font-size: 20px; padding-left: 20px;padding-top: 10px;">{{ __('Register') }}

                </div>
                <hr style="width: 15%; margin-left: 15px; background-color: #467dc0; height: 2px;">

                <div class="card-body" >
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf

                        <div class="form-group ">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Enter your name please" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                 style="background: url(img/person.png) ;background-position-y: center; background-size:20px ;background-repeat: no-repeat; padding-left: 30px;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Enter your e-mail please" style="background: url(img/mail.png) ;background-size:20px ;background-repeat: no-repeat; 
                                padding-left:30px; background-position-y: center;"type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Enter your password please"style="background: url(img/password.png) ;background-size:20px ;background-repeat: no-repeat;background-position-y: center; 
                                padding-left:30px;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Confirm your password please" style="background: url(img/password.png) ;background-size:20px ;background-repeat: no-repeat; background-position-y: center;
                                padding-left:30px;" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-1">
                                <button type="submit" class="btn btn-primary" style="width: 50%; background-color: #467dc0; border-radius: 20px;">
                                    {{ __('Sign up') }}
                                </button>
                            </div>
                            
                        </div>
                        <div style=" text-align: right;" >
                                
                            <a href="#"><img src="img/facebook.png" alt="logo" width="20" height="20" ></a>&nbsp;&nbsp;&nbsp;
                           <a href="#"><img src="img/twitter.png" alt="logo" width="20" height="20" ></a>&nbsp;&nbsp;&nbsp;
                            <a href="#"><img src="img/instagram.png" alt="logo" width="20" height="20" ></a>
                           
                   </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>