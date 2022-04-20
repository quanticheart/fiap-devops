<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fiap - CLOUD ARCHITECTURE & DEVOPS.</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('/image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('image/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

</head>
<body class="antialiased">

<!-- Bootstrap Static Header -->
<div style="background: url(https://bootstrapious.com/i/snippets/sn-static-header/background.jpg)"
     class="jumbotron bg-cover text-white pb-5">
    <header class="p-3 bg-transparent text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{asset("image/logo-white.png")}}" class="logo w-25" alt="">
                </a>
            </div>
        </div>
    </header>
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">Hello José!!</h1>
        <p class="font-italic mb-0">Landpage para FIAP, da Disciplina de CLOUD ARCHITECTURE & DEVOPS.</p>
    </div>
</div>

<!-- For Demo Purpose -->
<div class="container py-5 justify-content-center text-center">
    <h2 class="h3 font-weight-bold">Sobre o conteudo:</h2>
    <div class="row justify-content-center">
        <div class="mb-4">
            <p class="font-italic text-muted">
                Um projeto simples com intuito de utilizar os metodos de entrega continua, usando a hospedagem
                Heroku!</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class=" pb-3 section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3 class="">A <span> Equipe:</span></h3>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s"
                 style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb">
                    <img src="{{asset('image/1527428221532.jpeg')}}" alt="">
                    <!-- Social Info-->
                    <div class="social-info">
                        <a href="https://www.linkedin.com/in/jonatas-a-santos-1583a8163/"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6>Jonatas A. Santos</h6>
                    <p class="designation">RM 343731</p>
                </div>
            </div>
        </div>
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s"
                 style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb"><img src="{{asset('image/1630889655044.jpeg')}}" alt="">
                    <!-- Social Info-->
                    <div class="social-info"><a href="https://www.linkedin.com/in/silvalan/"><i
                                class="fa fa-linkedin"></i></a></div>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6>Alan Silva</h6>
                    <p class="designation">RM 343457</p>
                </div>
            </div>
        </div>
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb"><img src="{{asset('image/1637589748649.jpeg')}}" alt="">
                    <!-- Social Info-->
                    <div class="social-info"><a href="https://www.linkedin.com/in/adonai-pinheiro/"><i
                                class="fa fa-linkedin"></i></a></div>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6>Adonai Pinheiro</h6>
                    <p class="designation">RM </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex flex-column h-100">
    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container ">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <img src="{{asset("image/logo.png")}}" class="logo w-50" alt="">
                    <h5 class="text-white mt-3 ps-1">CLOUD ARCHITECTURE & DEVOPS</h5>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="https://www.heroku.com/platform">Heroku</a></li>
                        <li><a href="https://github.com/laravel/ui">Laravel UI</a></li>
                        <li><a href="https://laravel.com/">Laravel</a></li>
                        <li><a href="#">Github Repo</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav justify-content-center border-bottom ms-5 me-5 mb-3">
        </ul>
        <p class="text-center text-muted"> Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP
            v{{ PHP_VERSION }})</p>
    </footer>
</div>
</body>
</html>
