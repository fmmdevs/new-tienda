<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Online Store')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- Style css --}}
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>
    <div id="app" class="page-container">
        <div class="content-wrap">

            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand me-2" href="{{ url('/') }}">
                        Minimal T-shirts
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mx-auto">
                            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('product.index') }}">{{ __('Products') }}</a>
            </li> --}}
                            <li class="nav-item dropdown mx-md-4 mx-lg-5">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('Categories') }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="{{ route('product.index', 'men') }}">{{ __('Men') }}</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('product.index', 'women') }}">{{ __('Women') }}</a></li>
                                    {{-- <li><hr class="dropdown-divider"></li> --}}
                                    {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                </ul>
                            </li>

                            {{-- <li class="nav-item mx-md-4">
    <a class="nav-link" href="{{ route('product.index') }}">{{ __('Categories') }}</a>
</li> --}}
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('cart.index') }}">{{ __('Cart') }}</a>
                            </li>
                            <li class="nav-item mx-md-4 mx-lg-5">
                                <a class="nav-link" href="{{ route('home.contact') }}">{{ __('Contact') }}</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('home.about') }}">{{ __('About') }}</a>
                            </li>

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                {{-- Si no esta autenticado aparece Login y Register --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>

                                {{-- @if (Route::has('register')) --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                {{-- @endif --}}
                            @else
                                {{-- Si esta autenticado aparece un dropdown con su nombre de usuario
y dentro del dropdown puede hacer logout --}}
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container d-flex align-items-center flex-column">
                <h2>@yield('subtitle')</h2>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <footer class="copyright py-4 text-center text-black">

            <small>
                Copyright - 2024 </small>
        </footer>
    </div>


</body>

</html>
