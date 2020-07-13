<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts & Icons-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="dark-edition">
    <!-- Sidebar -->
    <div class="sidebar" data-color="purple" data-background-color="black">
        <div class="logo"><a class="simple-text logo-normal" href="/">WorkoutTitle</a></div>
        <ul class="nav">
            @auth
            <li class="nav-item {{ Request::path() === '/' ? 'active' : ''}}">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="material-icons">home</i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item {{ Request::path() === 'dashboard' ? 'active' : ''}}">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::path() === 'workouts' ? 'active' : ''}}">
                <a class="nav-link" href="{{ url('/workouts') }}">
                    <i class="material-icons">fitness_center</i>
                    <p>Workouts</p>
                </a>
            </li>
            <li class="nav-item {{ Request::path() === 'social' ? 'active' : ''}}">
                <a class="nav-link" href="{{ url('/social') }}">
                    <i class="material-icons">people</i>
                    <p>Social</p>
                </a>
            </li>
            @endauth
        </ul>

    </div>

    <!-- Main panel -->
    <div class="main-panel ps-container ps-theme-default ps-active-y">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="collapse navbar-collapse justify-content-end">
                <!-- Left side navbar -->
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="">{{ucfirst(Request::path() === '/' ? 'Home' : Request::path())}}</a>
                </div>
                <!-- Right side navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdownMenuLink" class="nav-link dropdown" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
                            <i class="material-icons">notifications</i>
                            <!-- TODO: dynamic notifications 
                             <span class="notification">5</span>  -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <!-- TODO: Add foreach to show notifications -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} 
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/account') }}">
                                Account
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
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
        </nav>
        <!-- Main content -->
        <div class="content">
            @yield('content')
        </div>
    </div>


</body>

</html>