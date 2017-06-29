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
        <!-- NProgress -->
        <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

        <!-- jQuery custom content scroller -->
        <link href="{{ asset('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet"/>

        <!-- Datatables -->
        <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">                
        <link href="{{ asset('css/fitness.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dropdown.css') }}" rel="stylesheet">        
        <link href="{{ asset('css/textstyle.css') }}" rel="stylesheet">                        
        <link href="{{ asset('css/videocard.css') }}" rel="stylesheet">        
    </head>

    <body class="nav-hidden">
        @if($current_time_zone=Session::get('current_time_zone'))@endif
        <input type="hidden" id="hd_current_time_zone" value="{{ Session::get('current_time_zone') }}">

        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col menu_fixed">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="/" class="site_title" style="padding: 0px">
                                <img src="{{ asset('images/common/logo-mark.svg') }}" style="width: 40px; display: block; margin: auto; margin-top: 10px;">
                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">    
                                <ul class="nav side-menu">
                                    <li title = "Schedule">
                                        <a href="{{ route('schedule') }}">
                                            <img src="{{ asset('images/sidemenu/calendar.png') }}"></img>
                                        </a>
                                    </li>
                                    <li title = "Workouts">
                                        <a href="{{ route('workouts') }}">
                                            <img src="{{ asset('images/sidemenu/yoga.png') }}"></img>
                                        </a>
                                    </li>
                                    <li title = "Course">
                                        <a href="{{ route('path') }}">
                                            <img src="{{ asset('images/sidemenu/roadmap.png') }}"></img>
                                        </a>
                                    </li>
                                    <li title = "Favourites">
                                        <a href="{{ route('favourite') }}">
                                            <img src="{{ asset('images/sidemenu/star.png') }}"></img>
                                        </a>
                                    </li>
                                    <li title = "Shopping">
                                        <a href="{{ route('shopping') }}">
                                            <img src="{{ asset('images/sidemenu/cart.png') }}"></img>
                                        </a>
                                    </li>
                                    <li title = "Help"><a><img src="{{ asset('images/sidemenu/help.png') }}"></img></a></li>
                                    <li title = "Setting"><a><img src="{{ asset('images/sidemenu/setting.png') }}"></img></a></li>
                                </ul>
                            </div>                           
                        </div>
                        <!-- /sidebar menu -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">                    
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="nav navbar-nav quick-start">
                                <li role="presentation" class="dropdown">
                                    <a id="quickStart" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                        QUICKSTART
                                        <span class="caret"></span>
                                    </a>
                                    <div id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                                        <div class="dropdown filter scroll-view">
                                            <div class="dropdown filterColumn targetAreas">
                                                <div class="dropdown filterHeading">
                                                    <h6>Target Areas</h6>
                                                    <hr>
                                                    <p>Target a specific area.</p>
                                                </div>
                                                <div class="dropdown filter-options">
                                                    @foreach($target_areas as $target_area)                                                        
                                                    <ul class="dropdown-columns one">
                                                        <li><a href="#" class="s12">{{ $target_area['area'] }}</a></li>
                                                    </ul>                                                        
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="dropdown filterColumn movements">
                                                <div class="dropdown filterHeading">
                                                    <h6>Movements</h6>
                                                    <hr>
                                                    <p>Target a movement.</p>
                                                </div>
                                                <div class="dropdown filter-options">
                                                    @foreach($movements as $movement)                                                        
                                                    <ul class="dropdown-columns one">
                                                        <li><a href="#" class="s12">{{ $movement['movement'] }}</a></li>
                                                    </ul>                                                        
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="dropdown filterColumn duration">
                                                <div class="dropdown filterHeading">
                                                    <h6>Duration</h6>
                                                    <hr>
                                                    <p>Routines by duration.</p>
                                                </div>
                                                <div class="dropdown filter-options">
                                                    <ul class="dropdown-columns one">
                                                        <li><a href="#" class="s12">Under 15 Minutes</a></li>
                                                    </ul>
                                                    <ul class="dropdown-columns one">
                                                        <li><a href="#" class="s12">15-20 Minutes</a></li>
                                                    </ul>
                                                    <ul class="dropdown-columns one">
                                                        <li><a href="#" class="s12">20-30 Minutes</a></li>
                                                    </ul>
                                                    <ul class="dropdown-columns one">
                                                        <li><a href="#" class="s12">30+ Minutes</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </li>
                            </div>

                            <div class="nav navbar-nav navbar-right" style="padding-right: 15px">
                                <li class="UserMenuWrapper no_background">
                                    <div class="UserMenu">
                                        @if (Auth::guest())
                                        <div class="loggedIn float-left small">
                                            <div class="user-gravatar float-left">
                                                <img src="{{ asset('images/common/icon-avatar.png') }}">
                                            </div>
                                            <div class="user-session-controls float-left" style="padding-left: 4px">                                                                              
                                                <h5>Welcome</h5>
                                                <a class="logOut" style="text-align: left;" href="{{ route('login') }}">Log In</a>
                                            </div>
                                        </div>
                                        @else
                                        <div class="loggedIn float-left">
                                            <div class="user-gravatar float-left">
                                                <img src="{{ asset('images/common/icon-avatar.png') }}">
                                            </div>
                                            <div class="user-session-controls float-left" style="padding-left: 4px">
                                                <h5>{{ Auth::user()->firstname }}, {{ Auth::user()->lastname }}</h5>

                                                <a class="logOut" style="text-align: left;" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                    Log Out
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>

                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </li>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
            </div>
            @yield('content')
        </div>

        <!-- jQuery -->
        <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
        <!-- NProgress -->
        <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
        <!-- Chart.js -->
        <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js') }}"></script>
        <!-- gauge.js -->
        <script src="{{ asset('vendors/gauge.js/dist/gauge.min.js') }}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>

        <!-- iCheck -->
        <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>

        <!-- Skycons -->
        <script src="{{ asset('vendors/skycons/skycons.js') }}"></script>

        <!-- Flot -->
        <script src="{{ asset('vendors/Flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.resize.js') }}"></script>

        <!-- Flot plugins -->
        <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
        <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
        <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js') }}"></script>
        <!-- DateJS -->
        <script src="{{ asset('vendors/DateJS/build/date.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
        <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
        <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>

        <!-- bootstrap-daterangepicker -->
        <script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!-- jQuery custom content scroller -->
        <script src="{{ asset('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>

        <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>

        <!-- Custom Theme Scripts -->
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/fitness.js') }}"></script>
    </body>
</html>