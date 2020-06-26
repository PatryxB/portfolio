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
                    <p>xd</p>
                </div>
                <div class="cv-right"></div>
            </div>
        </section>

        @endsection

    </body>
</html>