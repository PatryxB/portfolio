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

            <section id="info-sec">
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
            </section>

            <section id="portfolio-sec">
                <div class="line">
                    <p>Let's have a look</p>
                    <p style="font-size:25px">at</p>
                    <h1>Portfolio</h1>
                    </div>

                    <div class="work">
                        <div class="w"></div>
                        <div class="w" style="background-color: yellow"></div>
                        <div class="w" style="background-color:red"></div>
                        <div class="w" style="background-color: green"></div>
                        <div class="w" style="background-color:gray"></div>
                        <div class="w" style="background-color:orange"></div>
                        <div class="w" style="background-color: white"></div>
                        <div class="w" style="background-color:brown"></div>
                        <div class="w" style="background-color:pink;"></div>
                        <button class="btn" style="position:sticky;clear:both;">More</button>
                    </div>
            </section>

            <section id="contact-sec">
                <div>
                    <div class="banner">
                        <img src="{{asset('img/contactbanner.jpg')}}" alt="contact">
                    </div>
                    <div class="form-on-img">
                        <form action="" method="POST">
                            <label for="email">Email</label>
                            <input type="email" id="email">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject">
                            <label for="message">Message</label>
                            <textarea id="message" rows="4" cols="50"></textarea>
                        </form>
                    </div>
                </div>
            </section>

            <footer>
                <div>
                    <div class="block"><i>Facebook</i></div>
                    <div class="block"><i>Google</i></div>
                    <div class="block"><i>GitHub</i></div>
                    <div class="block"><i>Messanger</i></div>
                </div>
            </footer>

        </div>
    </body>
</html>
