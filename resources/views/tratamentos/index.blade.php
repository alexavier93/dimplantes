@extends('layouts.app')

@section('title', '- Tratamentos')

@section('content')

    <div id="tratamentos">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-page.jpg') }}')">

            <div class="container">
                <h1>Tratamentos</h1>
                <h5><a href="{{ route('home') }}">Home</a> <span>/</span> Tratamentos</h5>
            </div>

        </div>

        <div class="container">

            <div class="content">

                <div class="row">

                    @foreach ($tratamentos as $tratamento)

                        <div class="col-md-12 item">

                            <div class="row">

                                <div class="col-lg-6">
                                    
                                    <div class="img">
                                        <img class="img-fluid" src="{{ asset('storage/' . $tratamento->image) }}" alt="{{ $tratamento->name }}">
                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="info-tratamento">

                                        <h3 class="titulo">{{ $tratamento->name }}</h3>

                                        <p>{{ $tratamento->intro }}</p>
    
                                        <div class="text-right">
                                            <a class="btn-mais" href="{{ route('tratamentos.info', ['slug' => $tratamento->slug]) }}">Saiba Mais</a>
                                        </div>

                                    </div>
                                    
                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

@endsection
