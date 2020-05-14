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
    </body>
</html>