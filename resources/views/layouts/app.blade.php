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
                                    {{-- Generamos las categorias de forma dinamica usando un view composer --}}
                                    @foreach ($categories as $category)
                                        <li><a class="dropdown-item"
                                                href="{{ route('product.index', $category->name) }}">{{ __($category->name) }}</a>
                                        </li>
                                    @endforeach


                                </ul>
                            </li>

                            {{-- <li class="nav-item mx-md-4">
    <a class="nav-link" href="{{ route('product.index') }}">{{ __('Categories') }}</a>
</li> --}}
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('cart.index') }}">{{ __('Cart') }}</a>
                            </li>
                            @auth
                                {{-- Si esta autenticado mostramos My orders --}}
                                <li class="nav-item ms-md-4 ms-lg-5">
                                    <a class="nav-link " href="{{ route('myaccount.orders') }}">My Orders</a>
                                </li>
                            @endauth
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
                                        @if (Auth::user()->role == 'admin')
                                            <a class="dropdown-item" href="{{ route('admin.home.index') }}">
                                                {{ __('Admin Panel') }} </a>
                                        @endif
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
                @if (Auth::user() && Auth::user()->email_verified_at == null)
                    {{-- Si el usuario esta autenticado y no ha verificado su email mostramos un mensaje --}}
                    <div class="alert alert-light alert-dismissible fade show" role="alert">
                        "¡Hola! 🎉 Te hemos enviado un correo electrónico muy importante. Por favor, revisa tu bandeja
                        de entrada y haz clic en el botón para <strong>verificar</strong> tu dirección de <strong>correo
                            electrónico</strong>. ¡Gracias!
                        ✉️"
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h2>@yield('subtitle')</h2>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <footer class="copyright py-4 text-center text-black">
            <div class="container"> <small> Copyright - 2024 </small> </div>
        </footer>
    </div>


</body>

</html>
