@extends('admin.layouts.app')

@section('title', '- Editar Tratamento')

@section('content')

    <!-- Page Heading -->
    <div class="page-header-content py-3">

        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Tratamentos</h1>
        </div>

        <ol class="breadcrumb mb-0 mt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.tratamentos.index') }}">Tratamentos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Tratamento</li>
        </ol>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-md-12 mb-4">
            @include('flash::message')
        </div>

        <!-- Content Column -->
        <div class="col-xl-12 col-md-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">

                <div class="card-header">
                    <span class="m-0 font-weight-bold text-primary">Informações</span>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.tratamentos.update', ['tratamento' => $tratamento->id]) }}" method="post"
                        enctype="multipart/form-data">

                        @csrf
                        @method("PUT")

                        <div class="form-group row">
                            <div class="col-sm-2">Destaque na Home</div>
                            <div class="col-sm-10">
                                <label class="switch">
                                    <input type="checkbox" name="view_home" value="1" {{ ($tratamento->view_home == 1 ? 'checked' : '') }}>
                                    <span class="slider success"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $tratamento->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Breve Descrição</label>
                            <div class="col-sm-10">
                                <input type="text" name="intro" class="form-control @error('intro') is-invalid @enderror" value="{{ $tratamento->intro }}">
                                @error('intro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2">Imagem</div>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Descrição</label>
                            <div class="col-sm-10">
                                <textarea name="description"
                                    class="form-control summernote @error('description') is-invalid @enderror">{{ $tratamento->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>

                    </form>


                </div>

            </div>

        </div>

    </div>

@endsection
