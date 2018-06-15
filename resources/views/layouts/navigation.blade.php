<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <style type="text/css">
    html,
    body,
    header,
    .view {
    height: 80%;
    }
    @media (max-width: 740px) {
    html,
    body,
    header,
    .view {
      height: 100px;
    }
    }
    @media (min-width: 800px) and (max-width: 850px) {
    html,
    body,
    header,
    .view {
      height: 650px;
    }
    }
    @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
        /* The switch - the box around the slider */
    .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
    }
    /* Hide default HTML checkbox */
    .switch input {display:none;}
    /* The slider */
    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
    }
    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    }
    input:checked + .slider {
    background-color: #2196F3;
    }
    input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
    }
    input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
    }
    </style>
    <title>ODALID-@yield('titre')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @section('header')
            <nav class="navbar navbar-expand-md navbar-light primary-color scrolling-navbar">
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
                        <ul class="navbar-nav mr-auto dropright">
                            <div class="list-group d-inline-flex flex-wrap flex-row justify-content-between text-center">
                                <a href="/utilisateurs" class="list-group-item list-group-item-action list-group-item-primary p-1" style="width: 15vw">Utilisateurs</a>

                                <a href="/badges" class="list-group-item list-group-item-action list-group-item-primary p-1" style="width: 15vw">Badges</a>

                                <a href="/historique" class="list-group-item list-group-item-action list-group-item-primary p-1" style="width: 15vw">Historique</a>

                                <a href="#" class="dropdown-toggle list-group-item list-group-item-action list-group-item-primary p-1" style="width: 15vw" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="menu_infrastructure">Infrastructure</a>
                                <!-- Dropdown d'infrastructure -->

                                <div class="dropdown-menu bg-light" aria-labelledby="menu_infrastructure">
                                    <a href="/infrastructure/zones" class="dropdown-item">Zones</a>
                                    <a href="/infrastructure/portes" class="dropdown-item">Portes</a>
                                    <a href="/infrastructure/salles" class="dropdown-item">Salles</a>
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
                               <!-- a mettre en commentaire -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'enregistrer') }}</a>
                                </li>
                                <!-- fin de mise en commentaire -->
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

        <main class="py-0">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript">
    </script>
    @yield('scripts')
</body>
</html>
