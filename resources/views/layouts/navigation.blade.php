<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ODALID-@yield('titre')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @section('header')
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'DEFAUT') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @guest
                        @else
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav m-auto dropright">
                            <div class="list-group d-inline-flex flex-wrap flex-row justify-content-between text-center">
                                <a href="/utilisateurs" class="list-group-item list-group-item-action list-group-item-primary p-1" style="width: 15vw">Utilisateurs</a>

                                <a href="/badges" class="list-group-item list-group-item-action list-group-item-primary p-1" style="width: 15vw">Badges</a>

                                <a href="/historique" class="list-group-item list-group-item-action list-group-item-primary p-1" style="width: 15vw">Historique</a>

                                <a href="#" class="dropdown-toggle list-group-item list-group-item-action list-group-item-primary p-1" style="width: 15vw" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="menu_infrastructure">Infrastructure</a>
                                <!-- Dropdown d'infrastructure -->
                                <div class="dropdown-menu bg-light" aria-labelledby="menu_infrastructure">
                                    <a href="/infrastructure/zones" class="dropdown-item">Zones</a>
                                    <a href="/infrastructure/portes" class="dropdown-item">Portes</a>
                                    <a href="/infrastructure/relais" class="dropdown-item">Relais</a>
                                    <a href="/infrastructure/gaches" class="dropdown-item">Gâches</a>
                                    <a href="/infrastructure/lecteurs" class="dropdown-item">Lecteurs</a>
                                </div>
                            </div>
                        </ul>
                        @endguest
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                </li>
                               <!--
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'enregistrer') }}</a>
                                </li>
                                -->
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->username }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
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
                </div>
            </nav>
        @show

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/jquery-3.3.1.js') }}" defer></script>
</body>
</html>