<div class="right_col">
    <div class="relative">
        <ul class="menu vertical">
            <li class="UserMenuWrapper">
                <div class="UserMenu">
                    @if (Auth::guest())
                    <div class="loggedIn float-left">
                        <div class="user-gravatar float-left">
                            <img src="{{ asset('images/common/icon-avatar_black.png') }}">
                        </div>
                        <div class="user-session-controls float-left">
                            <h5>Welcome</h5>                            
                            <a class="logOut" style="text-align: left" href="{{ route('login') }}">Log In</a>
                        </div>
                    </div>
                    @else
                    <div class="loggedIn float-left">
                        <div class="user-gravatar float-left">
                            <img src="{{ asset('images/common/icon-avatar_black.png') }}">
                        </div>
                        <div class="user-session-controls float-left">
                            <h5>{{ Auth::user()->firstname }}, {{ Auth::user()->lastname }}</h5>

                            <a class="logOut" style="text-align: left" href="{{ route('logout') }}"
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
        </ul>        
        @yield('login_content')
    </div>
</div>