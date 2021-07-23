@extends('layouts.app')

@section('content')

    <div class="app-title">
        <div>
            <h1>
                <i class="fas fa-ad"></i>
                Gestão de Necessidades
            </h1>

            <p>A sua página de necessidades</p>
        </div>

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('home') }}">BankManagement</a></li>
            <li class="breadcrumb-item"><a href="{{ route('needs.list') }}">Needs</a></li>
            <li class="breadcrumb-item"><a href="#">Show</a></li>
        </ul>
    </div>

    <div class="row">

        <div class="col-md-12 mb-3">
            <a href="{{ route('needs.list') }}" class="btn btn-danger" data-toggle="tooltip" title="Voltar">
                <i class="fas fa-arrow-left"></i>
            </a>
            
            <a href="{{ route('need.edit', $need->id) }}" class="btn btn-info" data-toggle="tooltip" title="Editar necessidade">
                <i class="fas fa-edit"></i>
            </a>
        </div>

        <a href="#" class="col-lg-4 col-md-6 mb-4 text-dark">

            <div class="card">
                <div class="card-header {{ $need->status ? 'bg-success' : 'bg-danger' }}">
                    <h4 class="title text-white m-0">{{ $need->need }}</h4>
                </div>
                
                <div class="card-body">
                    <p class="card-text">
                        <strong>Gasto estimado: {{ number_format($need->amount, 2, ',', '.') }} KZs</strong>
                    </p>

                    <p class="card-text">
                        <strong>Estado: {!! $need->status ? '<span class="text-success">Concluída 😉</span>' : '<span class="text-danger">Não concluída 😔</span>' !!}</strong>
                    </p>

                    <p class="card-text">
                        <strong>Descrição: {{ $need->description }}</strong>
                    </p>

                    <p class="card-text">
                        <strong>Data de criação: {{ $need->created_at }}</strong>
                    </p>
                </div>
            </div>
    
        </a>

    </div>

@endsection