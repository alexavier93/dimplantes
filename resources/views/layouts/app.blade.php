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
                            <a href="{{ route('home') }}" class="logo-main"><img
                                    src="{{ asset('assets/images/logo-dimplantes.png') }}" alt=""></a>
                        @else
                            <a href="{{ route('home') }}" class="logo-main"><img class="img-fluid"
                                    src="{{ asset('assets/images/logo-dimplantes.png') }}" alt=""></a>
                        @endif
                        <a href="{{ route('home') }}" class="logo-fix"><img class="img-fluid"
                                src="{{ asset('assets/images/logo-dimplantes.png') }}" alt=""></a>
                    </div>

                    <div class="menu">

                        <nav class="nav">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Pacientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Contate-nos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Compromissos</a>
                                </li>

                                <li class="nav-item midias">
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
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
                            <a class="nav-link" href="">Pacientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Compromissos</a>
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

        <div class="info-footer">

            <div class="container">

                <div class="wrapper">
                    <h5>Você pode <b>ligar para nossa recepção em 11 9999-999</b> Seg-Sex 9h - 20h, e-mail para
                        contato@dimplantes.com.br ou preecher o <a href="">Formulário de Contato</a></h5>

                </div>


            </div>


        </div>

        <div class="footer-top">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 offset-md-3 item-link">
                        <img class="img-fluid mb-2" src="{{ asset('assets/images/logo-dimplantes.png') }}" alt="">
                    </div>

                </div>

            </div>

            <div class="divisor"></div>

            <div class="container">

                <div class="row">

                    <div class="col-md-6 offset-md-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi eveniet nobis dolores amet
                            sit dolore doloribus recusandae.</p>
                    </div>

                    <div class="col-md-6 offset-md-3">

                        <ul class="midias list-inline">
                            <li>
                                <a href="" target="_blank">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <i class="fab fa-instagram"></i>
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
