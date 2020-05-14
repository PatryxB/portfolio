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
        @extends('layouts.app')

        @section('content')
        <div>

            <section id="banner-sec">
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
            </section>
            <div id="info-sec"></div>
            <section style="    margin-bottom: 80px;
            ">
                <div class="profile">
                    <img id="me" src="{{asset('img/Patrykprof.jpg')}}" alt="Me" width="400" height="480">
                    <div class="info">
                        <div>PROGRAMER PHP I LARAVEL</div>
                        <div>I am a PHP programmer specializing in the Laravel framework.</div>
                        <div>I am also a Freelancer. Who would love to take care of your</div>
                        <div>project. Or create new one</div>

                        <img src="{{asset('img/code.svg')}}" width="300" height="300">
                    </divI>
                </div>
            </section>

            <section id="portfolio-sec">
                <div class="line">
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
                        <button class="btn" style="position:sticky;clear:both;">More</button>
                    </div>
            </section>

            <section id="contact-sec">
                <div class="bg-img">
                    <form action="" method="POST" class="container">
                        <label for="email">Email</label><br>
                        <input type="email" id="email"><br><br>
                        <label for="subject">Subject</label><br>
                        <input type="text" id="subject"><br><br>
                        <label for="message">Message</label><br>
                        <textarea id="message" rows="4" cols="66"></textarea><br><br>
                        <button type="submit"class="btnS">Submit</button>
                    </form>
                </div>
            </section>

            <footer>
                <div class="foot">
                    <h1 style="opacity: .6;">That was my portfolio &copy; 2020</h1>
                </div>
            </footer>

        </div>
        @endsection
    </body>
</html>