@extends('layouts.app')

@section('title', '- Contato')

@section('content')

    <div id="contato">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-page.jpg') }}')">

            <div class="container">
                <h1>Contato</h1>
                <h5><a href="{{ route('home') }}">Home</a> <span>/</span> Contato</h5>
            </div>
            
        </div>

        <div class="container">

            <div class="content">

                <div class="row">


    
                    <div class="col-xl-6 col-md-12 col-sm-12 my-4 map">
                        
                        <h1>AGENDE SUA<br>AVALIAÇÃO<br>GRATUITA</h1>



                            <p>Tel: (11) 4971-3720 | (11) 2759-5488<br>
                            Whatsapp (11) 97011-5370</p>

                            <p>Nosso horário de atendimento
                            é de Segunda a Sexta das 9h às 20h</p>

                    
                    </div>

                    <div class="col-xl-6 col-md-12 col-sm-12 form">
    
                        @include('flash::message')
    
                        <form action="{{ route('contato.enviaEmail') }}" method="POST" class="my-4">

                            @csrf

                            <div class="form-group">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nome *" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                
                            <div class="form-group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-mail *" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control telefone @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Telefone *" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="Mensagem *" required>{{ old('description') }}</textarea>
                                <div class="text-left"><small class="text-muted">* Campo obrigatório</small></div>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>

                        </form>
    
                    </div>
    
                </div>

            </div>

        </div>

    </div>

@endsection
