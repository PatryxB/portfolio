<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Patryk</title>

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
        <nav>

            <div class="column" id="burger" style="overflow: hidden;">
                <div style="float:right;margin-right:10px">
                  <span class="bar" style="background-color: white"></span>
                  <span class="bar"></span>
                  <span class="bar"></span>
                </div>
              </div>

            <ul>
                <li style="margin-bottom:6px;"><a href="{{ url('/') }}"><img src="{{asset('img/Patryk.png')}}" alt="Patryk" id="Patryk" width="47" height="25"></a></li>
                <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                <li><a href="{{ url('/#info-sec')}}">About Me</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="">EN/PL</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
            </ul>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
