<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mouse Confort Expert') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS (Ensure Bootstrap is included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        /* Sidebar Styles */
        .sidebar {
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .sidebar .nav-link.active {
            background-color: #0d6efd;
            color: white;
        }

        .content {
            padding: 20px;
        }

        /* Adjust Offcanvas width */
        .offcanvas-start {
            width: 250px;
        }

        @media (min-width: 768px) {
            /* Hide Offcanvas backdrop and make sidebar always visible on medium and larger screens */
            .offcanvas-start {
                display: none;
            }

            .sidebar {
                display: block !important;
            }
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <!-- Toggle button for Offcanvas (visible on small screens) -->
                <button class="btn btn-primary d-md-none me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Mouse Confort Expert') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar (Empty or Add Links if Needed) -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content with Sidebar -->
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar for Medium and Larger Screens -->
                <nav class="col-md-2 d-none d-md-block sidebar py-4">
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('acepted') ? 'active' : '' }}" href="{{ route('acepted') }}">
                                    Accepted
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('enCours') ? 'active' : '' }}" href="{{ route('pending') }}">
                                    en Cours
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('Traité') ? 'active' : '' }}" href="{{ route('traiter') }}"
                                    >
                                    Traité
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('annuler') ? 'active' : '' }}" href="{{ route('annuler') }}"
                                    >
                                    annuler
                                </a>
                            </li>
                            <!-- Add more navigation links here -->
                        </ul>
                    </div>
                </nav>

                <!-- Offcanvas Sidebar for Small Screens -->
                <div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasSidebarLabel">{{ config('app.name', 'Mouse Confort Expert') }}</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}" data-bs-dismiss="offcanvas">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('acepted') ? 'active' : '' }}" href="{{ route('acepted') }}" data-bs-dismiss="offcanvas">
                                    Accepted
                                </a>
                            </li>
                            <!-- Add more navigation links here -->

                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('Traité') ? 'active' : '' }}" href="{{ route('traiter') }}"
                                    data-bs-dismiss="offcanvas">
                                    Traité
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('enCours') ? 'active' : '' }}" href="{{ route('pending') }}"
                                    data-bs-dismiss="offcanvas">
                                    en Cours
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('annuler') ? 'active' : '' }}" href="{{ route('annuler') }}"
                                    data-bs-dismiss="offcanvas">
                                    annuler
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <!-- Content Area -->
                <main class="col-md-10 ms-sm-auto px-4 content">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Ensure Bootstrap JS is included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Yield Scripts -->
    @yield('scripts')
</body>

</html>
