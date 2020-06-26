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

        <h1>Cv</h1>

        <section id="cv" style="margin-top:50px;">
            <div class="cv-block">

                <div class="cv-left">
                    <img id="cvme" src="{{asset('img/Patrykprof.jpg')}}" alt="Me" width="150" height="150">
                    <h3>Contact</h3>
                    <div class="cv-contact-item">
                        <p>Phone</p>
                        <p>693 243 328</p>
                    </div>
                    <div class="cv-contact-item">
                        <p>Email</p>
                        <p>Patryk.Patrex.Bielski@gmail.com</p>
                    </div>
                    <div class="cv-contact-item">
                        <p>LinkedIn</p>
                        <a href="https://www.linkedin.com/in/patryk-bielski-2b10441a7/">LinkedIn.com/PatrykBielski</a>
                    </div>
                    <div class="cv-contact-item">
                        <p>GitHub</p>
                        <a href="https://github.com/PatryxB">github.com/PatryxB</a>
                    </div>
                </div>

                <div class="cv-right">
                    <h2>Patryk Bielski</h2>
                </div>
            </div>
        </section>

        @endsection

    </body>
</html>