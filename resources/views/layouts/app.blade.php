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

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>

    <body class="app sidebar-mini">
        <!-- Navbar-->
        <header class="app-header">
            <a href="{{ route('home') }}" class="app-header__logo">BankManagement</a>
            <!-- Sidebar toggle button-->
            <a href="#" class="app-sidebar__toggle" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
            <!-- Navbar Right Menu-->
            <ul class="app-nav">
                <li class="app-search">
                    <input class="app-search__input" type="search" placeholder="Search">
                    <button class="app-search__button"><i class="fa fa-search"></i></button>
                </li>

                <!-- User Menu-->
                <li class="dropdown">
                    <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                        <i class="fa fa-user fa-lg"></i>
                    </a>

                    <ul class="dropdown-menu settings-menu dropdown-menu-right">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg"></i>
                                Perfil
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-sign-out fa-lg"></i>
                                Sair
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- Sidebar menu -->
        
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

        <aside class="app-sidebar">
            <div class="app-sidebar__user">
                <div>
                    <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
                    <p class="app-sidebar__user-designation">Junior Fullstack Developer</p>
                </div>
            </div>

            <ul class="app-menu">
                <li>
                    <a class="app-menu__item active" href="{{ route('home') }}">
                        <i class="app-menu__icon fa fa-dashboard"></i>
                        <span class="app-menu__label">Página Inicial</span>
                    </a>
                </li>
            </ul>
        </aside>

        <main class="app-content">

            @yield('content')
            
        </main>
        
        <!-- Essential javascripts for application to work -->
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- The javascript plugin to display page loading on top -->
        <script src="{{ asset('js/plugins/pace.min.js') }}"></script>

    </body>

</html>
