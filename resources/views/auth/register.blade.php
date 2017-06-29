<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Bootstrap -->
        <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">       
        <!-- Bootstrap customize-->
        <link href="{{ asset('css/custom-login.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="main-container" style="padding-top: 20px; padding-bottom: 50px;">
            <div class="container login">
                <div class="row">
                    <div class="form-ui-container small-12 small-centered columns">
                        <img class="form-ui-icon" src="{{ asset('images/common/logo-mark.svg') }}">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <h1 class="component-title white">Let's get you signed up.</h1>

                            <div class="form-fields-panel">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="float: left; width: 50%; display: inline-block">
                                    <input id="name" type="text" placeholder="First name" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                    @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}" style="float: right; width: 50%; display: inline-block">
                                    <input id="name" type="text" placeholder="Last name" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                                    @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" placeholder="Email address" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" placeholder="Create Password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                                
                                <div class="row login-form-opts">
                                    <input type="checkbox" name="terms" value="true" {{ old('terms') ? 'checked' : '' }} required>     I Agree to the Terms of Service                                    
                                </div>
                            </div>
                            <button type="submit" class="button expanded large primary">
                                Continue
                            </button> 
                            <div class="formBase">
                                <label class="terms_of_use">
                                    By signing up you are agreeing to our 
                                    <a class="terms_of_use_link" href="#" target="_blank">Terms of Service</a>
                                </label>
                                Already have an account?
                                <a class="button secondary small" href="{{ route('login') }}">Log In</a>
                            </div>
                        </form>
                        
                        <img src="{{ asset('images/dashboard/logo.png') }}" style="padding-top: 50px; width: 200px; display: block; height: auto; margin: auto">
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>    
        <!-- Bootstrap -->
        <script src="{{ asset('js/custom-login.js') }}"></script>  
    </body>
</html>
