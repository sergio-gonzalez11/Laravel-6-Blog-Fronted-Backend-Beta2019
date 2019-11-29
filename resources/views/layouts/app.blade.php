<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="{{ asset('assets/css/fontastic.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

    <!-- Fancybox-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fancyapps/fancybox/jquery.fancybox.min.css') }}">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.default.css') }}" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

</head>

<body>
    <header class="header">
        <!-- Main Navbar-->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Navbar Brand -->
                <div class="navbar-header d-flex align-items-center justify-content-between">
                    <!-- Navbar Brand --><a class="navbar-brand">Experiencias a través de un Blog</a>
                    <!-- Toggle Button-->
                    <button type="button" data-toggle="collapse" data-target="#navbarcollapse"
                        aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler"><span></span><span></span><span></span></button>
                </div>
                <!-- Navbar Menu -->
                <div id="navbarcollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto" style="align-items: baseline;">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link ">Home</a>
                        </li>
                         <!-- Authentication Links -->
                         @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gestión
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('blog.crear') }}">Crear Post</a>
                            <a class="dropdown-item" href="{{ url('/blog/show') }}
                            ">Listado</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name}} {{Auth::user()->last_name }}<span class="caret">
                                <div class="post-footer d-flex align-items-center pl-2">
                                    <div class="avatar"><img src="{{ asset('storage').'/'.Auth::user()->image }}" alt="..." class="img-fluid" style="border-radius: 50%; max-width:40px;"></div>
                                    </div></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/user/index', Auth::user()->id ) }}">Perfil</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Desconectar sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                    <ul class="langs navbar-text">ES<span> </span></ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-6">
        @yield('listado')
        @yield('categorias')
        @yield('contenido')
        @yield('postId')
        @yield('login')
        @yield('register')
        @yield('perfil')
    </main>
    
    <!-- Page Footer-->
      @include('layouts.partials.footer')
    <!-- end Page Footer-->


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- <script src="{{ asset('assets/vendor/jquery.cookie/jquery.cookie.js') }}"> </script> 
    <script src="{{ asset('assets/vendor/@fancyapps/fancybox/jquery.fancybox.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/front.js') }}"></script>
    

</body>

</html>
