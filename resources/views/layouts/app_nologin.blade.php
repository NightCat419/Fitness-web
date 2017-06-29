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
        <nav class="navbar navbar-inverse navbar-fixed-top custom">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button data-toggle="collapse-side" 
                            data-target=".side-collapse" 
                            data-target-2=".main-container" 
                            type="button" class="navbar-toggle pull-left" style="margin-left: 5px">
                        <span class="icon-bar gray"></span>
                        <span class="icon-bar gray"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="" href="/">
                        <img src="{{ asset('images/common/logo-mark.svg') }}" style="height: 100%; padding: 10px; display: block; margin: auto;">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="custom side-collapse in">
                    <nav role="navigation" class="navbar-collapse custom" style="box-shadow: none;">
                        <ul class="nav navbar-nav">
                            <li><a style="overflow: hidden" href="{{ route('schedule') }}">Schedule</a></li>
                            <li><a style="overflow: hidden" href="{{ route('workouts') }}">Workouts</a></li>
                            <li><a style="overflow: hidden" href="#">Pricing</a></li>
                            <li><a style="overflow: hidden" href="#">About Us</a></li>
                        </ul>                    
                        <ul class="nav navbar-nav navbar-right">
                            <li><a style="overflow: hidden" href="{{ route('login') }}">Log In</a></li>
                            <li><a style="overflow: hidden" href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </nav>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        @yield('content')

        <!-- jQuery -->
        <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>    
        <!-- Bootstrap -->
        <script src="{{ asset('js/custom-login.js') }}"></script>  
    </body>
</html>