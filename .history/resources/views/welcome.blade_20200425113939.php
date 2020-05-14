<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Patryk Bielski</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        <div>
            <nav>
                <ul>
                    <li style="margin-bottom:6px;"><a href="{{ url('/home') }}"><img src="{{asset('img/Patryk.png')}}" alt="Patryk" width="47" height="25"></a></li>
                    <li><a href="">Portfolio</a></li>
                    <li><a href="">About Me</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Skills</a></li>
                    <li><a href="">experience</a></li>
                    <li><a href="">EN/PL</a></li>
                    <li><a href="">Login</a></li>
                </ul>
            </nav>

            <div class="banner">
                <img src="{{asset('img/banner.jpg')}}" alt="banner">

                <div class="center-text">
                    <img src="{{asset('img/Hello.png')}}" alt="hello">
                </div>
                <div>
                    <button>Let's Start</button>
                </div>
            </div>

        </div>
    </body>
</html>
