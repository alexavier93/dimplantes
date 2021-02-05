@extends('layouts.app')

@section('content')

    <!-- Home -->
    <div id="home">

        <!-- Banner Section -->
        <section class="banner-section">

            <div class="banner-carousel owl-carousel owl-theme">

                @foreach ($banners as $banner)
                    @if ($banner->status == 1)
                        <!-- Slide Item -->
                        <div class="slide-item"
                            style="background-image: url('{{ asset('storage/' . $banner->image) }}');">

                            <div class="container">

                                <div class="content-box">

                                    @if ($banner->title_active == 1)
                                        <h2>{{ $banner->title }}</h2>
                                    @endif

                                    <p class="descricao">
                                        {{ $banner->description }}
                                    </p>


                                    <a href="{{ $banner->link }}" class="btn-box">
                                        <span class="btn-title">Descobrir</span>
                                    </a>


                                </div>

                            </div>

                        </div>
                    @endif
                @endforeach

            </div>

        </section>

        <section class="wpp_content">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-lg-7"></div>

                    <div class="col-md-12 col-lg-5 col-xl-4">

                        <div class="wpp_contact">

                            <h2>Planeje sua<br>visita agora</h2>
                            <p class="my-4">Comece a mudança</p>
                            <a class="btn-agenda" href=""><i class="fab fa-whatsapp ml-2"></i> Agende Agora</a>

                        </div>

                    </div>


                </div>

            </div>

        </section>

        <section class="info-home">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-lg-5">

                        <div class="info_wrapper">

                            <div class="left_img">
                                <figure>
                                    <div>
                                        <img src="https://demo.curlythemes.com/dentist-wp/wp-content/uploads/sites/22/2017/06/Receptionroominclinic.jpg"
                                            alt="">
                                    </div>
                                </figure>
                            </div>

                            <div class="right_img">
                                <figure>
                                    <div>
                                        <img src="https://demo.curlythemes.com/dentist-wp/wp-content/uploads/sites/22/2017/06/Portraitofyounghandsomedentistinclinic1.jpg"
                                            alt="">
                                    </div>
                                </figure>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 col-lg-5 offset-lg-1">

                        <h2>Um bom dia<br> e um <b>sorriso<br> bonito</b></h2>

                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem numquam, esse odit
                            aspernatur sapiente earum magni officiis voluptate quia beatae eveniet quaerat ducimus dolores
                            obcaecati necessitatibus inventore vel ea laudantium!</h6>

                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore perferendis, quo amet, assumenda
                            nemo facere ad debitis eum nostrum neque ab molestias id officia accusamus non alias voluptatem
                            excepturi officiis!</p>

                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore perferendis, quo amet, assumenda
                            nemo facere ad debitis eum nostrum neque ab molestias id officia accusamus non alias voluptatem
                            excepturi officiis!</p>

                    </div>

                </div>

            </div>

        </section>

        <section class="cases-home">

            <div class="container">

                <div class="row">

          
                    <div class="col-md-12 col-lg-4">

                        <div class="wrapper-cases-title">

                            <h2>Nossos casos e<br>
                                histórias de<br>
                                pacientes</h2>

                            <a href="" class="btn-todos">Ver todos os casos</a>

                        </div>

                    </div>

                    <div class="col-md-12 col-lg-8">

                        <div class="wrapper-cases">

                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="person">
                                        <img src="https://demo.curlythemes.com/dentist-wp/wp-content/uploads/sites/22/2017/06/Untitled-4-2.jpg"
                                            alt="">
                                        <div class="person__info">
                                            <div class="person__title"><small>CLINICAL CASE</small><br>Samantha J.</div>
                                            <div class="person__content">Tooth Whitening, Root Canal Treatments, Implants<p>
                                                </p>
                                                <p style="text-align: right;"><a class="btn btn-link btn-sm" href="#">View
                                                        Case</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 d-none d-md-block d-lg-block d-xl-block">
                                    <div class="person">
                                        <img src="https://demo.curlythemes.com/dentist-wp/wp-content/uploads/sites/22/2017/06/Untitled-5-2.jpg"
                                            alt="">
                                        <div class="person__info">
                                            <div class="person__title"><small>CLINICAL CASE</small><br>Samantha J.</div>
                                            <div class="person__content">Tooth Whitening, Root Canal Treatments, Implants<p>
                                                </p>
                                                <p style="text-align: right;"><a class="btn btn-link btn-sm" href="#">View
                                                        Case</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 d-none d-md-block d-lg-block d-xl-block">
                                    <div class="person">
                                        <img src="https://demo.curlythemes.com/dentist-wp/wp-content/uploads/sites/22/2017/06/Untitled-6-2.jpg"
                                            alt="">
                                        <div class="person__info">
                                            <div class="person__title"><small>CLINICAL CASE</small><br>Samantha J.</div>
                                            <div class="person__content">Tooth Whitening, Root Canal Treatments, Implants<p>
                                                </p>
                                                <p style="text-align: right;"><a class="btn btn-link btn-sm" href="#">View
                                                        Case</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="sobre-home">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-lg-5">

                        <div class="info_wrapper">

                            <div class="left_img">
                                <figure>
                                    <div>
                                        <img src="https://demo.curlythemes.com/dentist-wp/wp-content/uploads/sites/22/2017/06/interiorofnewmoderndentalclinicoffice-1.jpg"
                                            alt="">
                                    </div>
                                </figure>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 col-lg-5 offset-lg-1">

                        <h2>Sobre Nossa<br>Clínica<br>Dentista</h2>

                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem numquam, esse odit
                            aspernatur sapiente earum magni officiis voluptate quia beatae eveniet quaerat ducimus dolores
                            obcaecati necessitatibus inventore vel ea laudantium!</h6>

                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore perferendis, quo amet, assumenda
                            nemo facere ad debitis eum nostrum neque ab molestias id officia accusamus non alias voluptatem
                            excepturi officiis!</p>

                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore perferendis, quo amet, assumenda
                            nemo facere ad debitis eum nostrum neque ab molestias id officia accusamus non alias voluptatem
                            excepturi officiis!</p>

                    </div>

                </div>

            </div>

        </section>

        <section class="servicos-home">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-lg-5">

                        <h2>Descobrir <b>D’Implantes</b></h2>

                        <p>Nossos clientes são nossa prioridade, oferecemos serviços odontológicos de qualidade com uma
                            equipe de especialistas. Mais detalhe sobre nossos serviços</p>

                        <a href="" class="btn-mais">Agende uma consulta</a>

                    </div>

                    <div class="col-md-12 col-lg-6 offset-lg-1">

                        <div class="info_wrapper">

                            <div class="servicos">

                                <div class="row">

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/icon-implante.png') }}" alt="">
                                        <h4>Implantes</h4>
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/icon-implante.png') }}" alt="">
                                        <h4>Implantes</h4>
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/icon-implante.png') }}" alt="">
                                        <h4>Implantes</h4>
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/icon-implante.png') }}" alt="">
                                        <h4>Implantes</h4>
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/icon-implante.png') }}" alt="">
                                        <h4>Implantes</h4>
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/icon-implante.png') }}" alt="">
                                        <h4>Implantes</h4>
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/icon-implante.png') }}" alt="">
                                        <h4>Implantes</h4>
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/icon-implante.png') }}" alt="">
                                        <h4>Implantes</h4>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="exemplo">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 offset-md-2">
                        <div id="exemploDente">
                            <img src="{{ asset('assets/images/img-exemplo-1.jpg') }}" alt="">
                            <img src="{{ asset('assets/images/img-exemplo-2.jpg') }}" alt="">
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section class="map-home">

            <div class="container">

                <div class="text-center">
                    <h2>Como Chegar</h2>
                </div>

                <div class="map text-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5927.503944842329!2d-46.52179989022653!3d-23.67311667970886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe70917dcc1ab64c0!2sD&#39;Implantes!5e0!3m2!1spt-BR!2sbr!4v1612527057567!5m2!1spt-BR!2sbr"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    <h5 class="mt-5">R. Carijós, 313 - Vila Alzira, Santo André - SP, 09180-000</h5>
                </div>

            </div>

        </section>

    </div>
    <!-- End Home -->

@endsection
