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
                    <li style="margin-bottom:6px;"><a href="{{ url('/') }}"><img src="{{asset('img/Patryk.png')}}" alt="Patryk" width="47" height="25"></a></li>
                    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                    <li><a href="#info-sec">About Me</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="">Skills</a></li>
                    <li><a href="">experience</a></li>
                    <li><a href="">EN/PL</a></li>
                    <li><a href="">Login</a></li>
                </ul>
            </nav>

            <section id="portfolio-sec">
                <div class="line" style="margin-top: 8vh;">
                    <p>Let's have a look</p>
                    <p style="font-size:25px">at</p>
                    <h1>Portfolio</h1>
                    </div>

                    <div class="work" style="background-color: #eee;">
                        <div class="w"><img src="{{asset('/img/secondWork.png')}}" style="width: 100%;height: 50vh;"></div>
                        <div class="w"><img src="{{asset('/img/firstWork.png')}}" style="width: 100%;height: 50vh;"></div>
                        <div class="w"><img src="{{asset('/img/6Work.png')}}" style="width: 100%;height: 50vh;"></div>
                        <div class="w"><img src="{{asset('/img/4Work.png')}}" style="width: 100%;height: 50vh;"></div>
                        <div class="w"><img src="{{asset('/img/5Work.png')}}" style="width: 100%;height: 50vh;"></div>
                        <div class="w"><img src="{{asset('/img/thirdWork.png')}}" style="width: 100%;height: 50vh;"></div>
                        <br style="clear:both;">
                    </div>
            </section>

            <footer>
                <div class="foot">
                    <h1 style="opacity: .6;">That was my portfolio &copy; 2020</h1>
                </div>
            </footer>

        </div>
    </body>
</html>