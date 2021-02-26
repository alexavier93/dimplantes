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

                            <h2>AGENDE UMA AVALIAÇÃO GRATUITA</h2>
                            <p class="my-4">Comece a mudança</p>
                            <a class="btn-agenda" href="https://wa.me/5511970115370" target="_blank"><i class="fab fa-whatsapp ml-2"></i> Agende Agora</a>
                        </div>

                    </div>


                </div>

            </div>

        </section>

        <section id="sobre" class="info-home">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-lg-5">

                        <div class="info_wrapper">

                            <div class="left_img">
                                <figure>
                                    <div>
                                        <img src="{{ asset('assets/images/casal.jpg') }}" alt="">
                                    </div>
                                </figure>
                            </div>

                            <div class="right_img">
                                <figure>
                                    <div>
                                        <img src="{{ asset('assets/images/paciente.jpg') }}" alt="">
                                    </div>
                                </figure>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 col-lg-5 offset-lg-1">

                        <h2>Um novo sorriso em pouco tempo com <b>Implantes Dentários</b></h2>

                        <p>Transforme a sua vida e sorria sem medo de ser feliz! Oferecemos serviços odontológicos de qualidade, equipamentos de última geração e uma equipe de especialistas totalmente capacitada e pronta para te atender como você merece.</p>         

                        <p>A D'implantes é uma clínica com mais de 19 anos de atuação especializada em implantodontia, odontologia estética, cirurgia e prótese dentária utilizando os métodos mais inovadores do mercado.</p>

                        <p>Nós planejamos um tratamento especial para cada paciente, com resultados rápidos, eficientes e com total segurança. Além de um atendimento personalizado realizado com o especialista Dr. Humberto, profissional fixo em nossa sede própria.</p>

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

                        <h2>Nossa Clínica Odontológica SPA</h2>

                        <p>A D’Implantes possui uma área exclusiva para pacientes que preferem realizar a carga imediata com conforto, segurança e serviços de cozinha gourmet. O ambiente é harmonioso e aconchegante, podendo ser utilizado principalmente para pacientes que residem em outras Cidades ou Estados</p>

                        <p>Nossa proposta é realizar todas ou a maioria das etapas do tratamento em apenas 1 dia. Para este tratamento é importante que o paciente agende uma consulta para que seja planejado todas as etapas e somente após está avaliação, inicia o atendimento SPA.</p>

                        <p>Neste atendimento proporcionamos ao paciente privacidade total e exclusividade. Esta opção é interessante principalmente para as pessoas que precisam de urgência nos resultados odontológicos e procuram um dia de descanso enquanto tratam de sua saúde bucal.</p>

                    </div>

                </div>

            </div>

        </section>

        <section class="servicos-home">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-lg-5">

                        <h2>Descubra nossas<br><b>especialidades</b></h2>

                        <p>Trabalhamos com as tecnologias mais avançadas do mercado, desde a substituição de próteses móveis a implantação unitária e de ponte fixa, extração de dentes do siso, ortodontia, cirurgias até estética bucal.</p>

                        <a href="{{ route('tratamentos.index') }}" class="btn-mais">CONHEÇA OS TRATAMENTOS</a>

                    </div>

                    <div class="col-md-12 col-lg-6 offset-lg-1">

                        <div class="info_wrapper">

                            <div class="servicos">

                                <div class="row">

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/implantes.png') }}" alt="">
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/canal.png') }}" alt="">
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/restauracao.png') }}" alt="">
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/limpeza.png') }}" alt="">
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/clareamento.png') }}" alt="">
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/facetas-porcelana.png') }}" alt="">
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/raspagem.png') }}" alt="">
                                    </div>

                                    <div class="col-sm-4 col-md-3 servico-item text-center">
                                        <img class="" src="{{ asset('assets/images/icones/aparelhos.png') }}" alt="">
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

        

    </div>
    <!-- End Home -->

@endsection
