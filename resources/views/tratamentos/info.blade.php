@extends('layouts.app')

@section('title', '- '.$tratamento->name)

@section('content')

    <div id="tratamentos">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-page.jpg') }}')">

            <div class="container">
                <h1>{{ $tratamento->name }}</h1>
                <h5><a href="{{ route('home') }}">Home</a> <span>/</span> <a href="{{ route('tratamentos.index') }}">Tratamentos</a> <span>/</span> {{ $tratamento->name }}</h5>
            </div>

        </div>

        <div class="container">

            <div class="content">

                <div class="row info">

                    <div class="col-md-4">
                        <ul>
                            @foreach ($tratamentos as $item)
                                <li><a href="{{ route('tratamentos.info', ['slug' => $item->slug]) }}" class="@if ($item->slug == request()->route('slug'))active @endif">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-md-7">

                        <h3 class="mt-3">{{ $tratamento->name }}</h3>

                        <div class="descricao">{!! $tratamento->description !!}</div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
