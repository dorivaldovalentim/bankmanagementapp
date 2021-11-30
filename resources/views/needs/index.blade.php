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
            <li class="breadcrumb-item"><a href="#">Needs</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ route('need.create') }}" class="btn btn-success" data-toggle="tooltip" title="Nova necessidade">
                <i class="fas fa-plus"></i>
            </a>
        </div>

        @forelse ($needs as $need)

            <a href="{{ route('need.show', $need->id) }}" class="col-lg-4 col-md-6 mb-4 text-dark">

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
                    </div>
                </div>
        
            </a>
        
        @empty
            <p>Não há necessidades</p>
        @endforelse

    </div>

@endsection