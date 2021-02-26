<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Dimplantes @yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/mhayes-twentytwenty/1.0.0/css/twentytwenty.min.css" />

    <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">


</head>

<body>

    <!-- Header -->
    <header id="header">

        <div class="header-nav">

            <div class="container">

                <div class="row">

                    <div class="logo">
                        @if (route('home'))
                            <a href="{{ route('home') }}" class="logo-main"><img src="{{ asset('assets/images/logo-dimplantes.png') }}" alt=""></a>
                        @else
                            <a href="{{ route('home') }}" class="logo-main"><img class="img-fluid" src="{{ asset('assets/images/logo-dimplantes.png') }}" alt=""></a>
                        @endif
                        <a href="{{ route('home') }}" class="logo-fix"><img class="img-fluid" src="{{ asset('assets/images/logo-dimplantes.png') }}" alt=""></a>
                    </div>

                    <div class="menu">

                        <nav class="nav">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#sobre">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('tratamentos.index') }}">Tratamentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contato.index') }}">Contato</a>
                                </li>

                                <li class="nav-item midias">
                                    <a href="https://www.facebook.com/dimplantesodontologia" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/dimplantes" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://wa.me/5511970115370" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </li>

                            </ul>
                        </nav>

                    </div>

                    <a href="javascript:void(0)" class="sidemenu_btn d-lg-none" id="sidemenu_toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>

                </div>

            </div>

        </div>

        <!--Side Nav-->
        <div class="side-menu hidden">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tratamentos.index') }}">Tratamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contato.index') }}">Contato</a>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>

        <a id="close_side_menu" href="javascript:void(0);"></a>

    </header>
    <!-- Header -->

    <main role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer">

        <div class="map">

            <div class="container">

                <div class="text-center">
                    <h5><i class="fas fa-map-marker-alt mr-3"></i> R. Carijós, 313 - Vila Alzira, Santo André - SP, 09180-000</h5>
                </div>

            </div>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.0738635563553!2d-46.52166608502011!3d-23.673316384627373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4276fb7158b3%3A0x128d172ae81d7229!2sR.%20Carij%C3%B3s%2C%20313%20-%20Vila%20Alzira%2C%20Santo%20Andr%C3%A9%20-%20SP%2C%2009180-000!5e0!3m2!1spt-BR!2sbr!4v1613770540409!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

        <div class="info-footer">

            <div class="container">

                <div class="wrapper">
                    <h5>
                        AGENDE SUA AVALIAÇÃO GRATUITA <a href="">Formulário de Contato</a><br>
                        Tel: (11) 4971-3720 | (11) 2759-5488 | Whatsapp (11) 97011-5370
                    </h5>
                </div>

            </div>

        </div>

        <div class="footer-top">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 offset-md-3 item-link">
                        <img class="img-fluid w-75 mb-2" src="{{ asset('assets/images/logo-dimplantes.png') }}" alt="">
                    </div>

                </div>

            </div>

            <div class="divisor"></div>

            <div class="container">

                <div class="row">

                    <div class="col-md-6 offset-md-3">
                        <p>Nosso horário de atendimento é de Segunda a Sexta das 9h às 20h</p>
                    </div>

                    <div class="col-md-6 offset-md-3">

                        <ul class="midias list-inline">
                            <li>
                                <a href="https://www.facebook.com/dimplantesodontologia" target="_blank">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </li>
                            
                            <li>
                                <a href="https://www.instagram.com/dimplantes" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/5511970115370" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    

                </div>

            </div>


        </div>


    </footer>
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mhayes-twentytwenty/1.0.0/js/jquery.twentytwenty.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mhayes-twentytwenty/1.0.0/js/jquery.event.move.min.js"></script>

    <script src="{{ asset('/assets/js/app.js') }} "></script>

</body>

</html>
