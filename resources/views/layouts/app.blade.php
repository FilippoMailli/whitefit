<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WhiteFit') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top navbar-light shadow-sm">
            <div class="container container-flex" id="container-navbar-principale">
                <div class="">
                    <a class="navbar-brand torna-home" href="{{ url('/') }}">
                        LOGO  || LOGO
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a href="{{route('index')}}">HOME</a>
                        </li>

                    </ul>
                </div>
                <!-- Center Of Navbar -->
                <!-- Right Side Of Navbar -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li>
                            <a href="{{route('contatti')}}">CONTATTI</a>
                        </li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CHI SIAMO
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="dropdownMenu2">
                                <a class="dropdown-item" id="item-del-menu" href="{{ROUTE('whitefit')}}">WHITEFIT</a>
                                <a class="dropdown-item" id="item-del-menu" href="{{ROUTE('whiteteam')}}">WHITETEAM</a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
        <main>
            @yield('content')
        </main>
    @yield('script')
</body>
</html>
