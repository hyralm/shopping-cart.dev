<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Shopping Cart') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('cart.shoppingCart') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        Shopping Cart
                        @if(Session::has('cart'))
                            <span class="badge">
                                {{ Session::get('cart')->totalQty }}
                            </span>
                        @endif
                    </a>
                </li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                    <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('user.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                            <li>
                                <a href="javascript:void(0)"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>