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
                    <button class="btn">Let's Start</button>
                </div>
                <div class="css-typing">
                    <h1>I'm Freelancer <span class="span">PHP Developer</span></h1>
                  </div>
            </div>

            <div class="profile">
                <img id="me" src="{{asset('img/Patrykprof.jpg')}}" alt="Me" width="400" height="480">
                <div class="info">
                    <div>PROGRAMISTA PHP I LARAVEL</div>
                    <div>Jestem programistą PHP specjalizującym się we frameworku Laravel. Posiadam także <br>
                    doświadczenie w kierowaniu zespołem programistów, bieżącej analizie nadsyłanego kodu <br>
                    (Code review) oraz pomocy innym programistom w rozwiązywaniu problemów.</div>

                    <div>W 2017 roku zdałem międzynarodowy egzamin PHP (wersja PHP 7.1) uzyskując prestiżowy <br>
                    certyfikat Zend Certified Engineer. W 2018 roku zdałem egzamin ze znajomości frameworka <br>
                    Laravel uzyskując certyfikat Certified Laravel Developer, który potwierdza moją dobrą <br>
                    znajomość frameworka Laravel.</div>
                    <img src="{{asset('img/code.svg')}}" width="300" height="300">
                </div>
                </div>
        </div>
    </body>
</html>
