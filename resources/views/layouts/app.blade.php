<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WhiteFit') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6619c90159.js" crossorigin="anonymous"></script>
    <script>


    // Initialize and add the map
          function initMap() {
            // The location of Uluru
            const uluru = { lat: 45.428262, lng: 10.758799 };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
              zoom: 17,
              center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
              position: uluru,
              map: map,
            });
          }
          </script>
    {{-- <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3UjhjGJl-XGW6uWohIAeQtAnxIzTprdg&callback=initMap">
</script> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top navbar-light shadow-sm mb-1">
            <div class="container container-flex" id="container-navbar-principale">
                <div class="">
                    <a class="navbar-brand torna-home" href="{{ url('/') }}">
                        LOGO  || LOGO
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Center Of Navbar -->
                <!-- Right Side Of Navbar -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li>
                            <a href="{{route('contatti')}}">CONTATTI</a>
                        </li>
                        <li>
                            <a href="{{route('whitefit')}}">FITNESS HOUSE</a>
                        </li>
                        <li>
                            <a href="{{route('contatti')}}">FIGHT ACADEMY</a>
                        </li>
                        {{-- <div class="dropdown">
                            <a class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CHI SIAMO
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="dropdownMenu2">
                                <a class="dropdown-item" id="item-del-menu" href="{{ROUTE('whitefit')}}">WHITEFIT</a>
                                <a class="dropdown-item" id="item-del-menu" href="{{ROUTE('whiteteam')}}">WHITETEAM</a>
                            </div>
                        </div> --}}
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
