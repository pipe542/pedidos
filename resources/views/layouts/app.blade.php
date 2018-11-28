<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
            <!-- CSRF Token -->
        </meta>
        <meta content="{{ csrf_token() }}" name="csrf-token">
        </meta>
        <title>
            {{ config('app.name', 'Laravel') }}
        </title>
        <!-- Styles -->
        <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
        </link>
        <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
        </link>
        <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" rel="stylesheet">
        </link>
    </head>
    <body>
        <div>
            <nav class="nav nav-static-top bg-info">
                <div class="container">
                    <div class="nav-header ">
                        <!-- Branding Image -->
                        <a class="navbar-brand text-dark nav-item" href="{{ url('/') }}">
                            Nombre de la aplicación
                        </a>
                    </div>
                    <!-- Left Side Of Navbar -->
                    <ul class="nav justify-content-center">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav nav-nav navbar-right derecha">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="btn-azul nav-link " href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn-azul nav-link " href="{{ route('register') }}">
                                Register
                            </a>
                        </li>
                        @else
                        @if (Auth::user()->tipo === 'cliente')
                        <li class="nav-item">
                            <a class="btn-azul nav-link" href="{{ url('restaurantes') }}">
                                Hacer pedido
                            </a>
                        </li>
                        @endif
                        @if (Auth::user()->tipo === 'restaurante')
                        <form accept-charset="utf-8" action="{{ url('ver') }}" method="POST">
                            {{ csrf_field() }}
                            <li class="nav-item">
                                <button class=" btn-azul nav-link" type="submit">
                                    ver pedidos
                                </button>
                                <input name="id" type="hidden" value="{{ Auth::user()->id }}"/>
                            </li>
                        </form>
                        <li class="dropdown ">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle btn-azul nav-link" data-toggle="dropdown" href="#" role="button" v-pre="">
                                agregar menu
                                <span class="caret">
                                </span>
                            </a>
                            <ul class="dropdown-menu bg-success">
                                <li class="btn btn-success">
                                    <a class="text-dark btn btn-light" href="{{ url('nuevo') }}">
                                        Agregar plato
                                    </a>
                                </li>
                                <li class="btn btn-success">
                                    <a class="text-dark btn btn-light" href="{{ url('nueva') }}">
                                        Agregar bebida
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle btn-azul nav-link" data-toggle="dropdown" href="#" role="button" v-pre="">
                                {{ Auth::user()->name }}
                                <span class="caret">
                                </span>
                            </a>
                            <ul class="dropdown-menu bg-success">
                                <li class="btn btn-success">
                                    <a class="text-dark btn btn-light" href="{{ route('logout') }}" onclick="event.preventDefault();
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
            </nav>
        </div>
        @yield('content')

        @include('footer')
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}">
        </script>
        <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
        </script>
    </body>
</html>