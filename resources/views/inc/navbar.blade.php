<nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/storage/web_imgs/logo1.png" width="50" height="50" class="d-inline-block align-bottom" alt="">
                <strong>NIA</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                        
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li> 
                        <li class="nav-item active">
                            <a class="nav-item nav-link" href="/services">Services</a>
                        </li>
                        <li class="nav-item active">
                                <a class="nav-item nav-link" href="/gallery">Gallery</a>
                        </li>
                        <li class="nav-item active">
                                <a class="nav-item nav-link" href="/about">About</a>
                        </li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                    @if(Auth::user()->hasRole('Client'))
                        <li class="nav-item active">
                                <a class="nav-item nav-link" href="/contact">Contact</a>
                        </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <h6 class="dropdown-header">{{ Auth::user()->name }}</h6>
                                @if(Auth::user()->hasAnyRole([
                                    'Admin',
                                    'Maintenance Department',
                                    'Irrigation Association',
                                    'Contstruction Structures',
                                    'Billing',
                                    'Permits'
                                ]))
                                <a class="dropdown-item" href="/dashboard">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                Dashboard
                                </a>
                                @endif
                                @if(Auth::user()->hasRole('Admin'))
                                <a class="dropdown-item" href="/publish">
                                    <i class="fa fa-linode" aria-hidden="true"></i>
                                    Publish
                                </a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>