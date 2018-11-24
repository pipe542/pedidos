<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <!-- CSRF Token -->
                    <meta content="{{ csrf_token() }}" name="csrf-token">
                        <title>
                            {{ config('app.name', 'Laravel') }}
                        </title>
                        <!-- Styles -->
                        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                            <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
                            </link>
                        </link>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Collapsed Hamburger -->
                        <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#app-navbar-collapse" data-toggle="collapse" type="button">
                            <span class="sr-only">
                                Toggle Navigation
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                        </button>
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @guest
                            <li>
                                <a href="{{ route('login') }}">
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">
                                    Register
                                </a>
                            </li>
                            @else
                            <li>
                                <a href="{{ url('pedidos') }}">
                                    Hacer pedido
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('ver') }}">
                                    ver pedidos
                                </a>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" v-pre="">
                                    agregar menu
                                    <span class="caret">
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('nuevo') }}">
                                            Agregar plato
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('nueva') }}">
                                            Agregar bebida
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" v-pre="">
                                    {{ Auth::user()->name }}
                                    <span class="caret">
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>
                                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </body>
</html>
@yield('content')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}">
</script>
