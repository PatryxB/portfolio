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
        <div class="container">

            <nav>
                <ul>
                    <li><a href="">Portfolio</a></li>
                    <li><a href="">About Me</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="{{ url('/home') }}"><img src="{{asset('img/Patryk.png')}}" alt="Patryk" width="94" height="50"></a></li>
                    <li><a href="">Register</a></li>
                    <li><a href="">Login</a></li>
                    <li><a href="">EN/PL</a></li>
                </ul>
            </nav>

            <div class="left">

            </div>

            <div class="right">

            </div>

        </div>
    </body>
</html>
