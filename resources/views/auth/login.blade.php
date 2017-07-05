@extends('layouts.app_nologin')

@section('content')

<div class="main-container" style="padding-bottom: 100px;">
    <div class="container login">
        <div class="row">
            <div class="form-ui-container small-12 small-centered columns">
                <img class="form-ui-icon" src="{{ asset('images/common/logo-mark.svg') }}">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <h1 class="component-title white">Log into your account</h1>

                    <div class="form-fields-panel">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" placeholder="E-Mail Address" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="row login-form-opts">
                            <div class="small-7 columns" style="display: inline-block; float: left; color: #555">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>             
                                 Remember Me
                            </div>
                            
                            <div class="small-5 columns" style="display: inline-block; float: right;">
                                <a href="{{ route('password.request') }}" style="color: #555">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="button expanded large primary">
                        Log In
                    </button>
                    
                    <img src="{{ asset('images/dashboard/logo.png') }}" style="padding-top: 50px; width: 200px; display: block; height: auto; margin: auto">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
