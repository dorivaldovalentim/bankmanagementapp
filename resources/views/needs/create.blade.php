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
            <li class="breadcrumb-item"><a href="#">Create</a></li>
        </ul>
    </div>

    <div class="row">

        <div class="col-md-12 mb-3">
            <a href="{{ route('needs.list') }}" class="btn btn-danger" data-toggle="tooltip" title="Voltar">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>

        <form action="{{ route('need.store') }}" method="POST" class="col-md-6">
            @csrf

            <div class="form-group">
                <input type="text" name="need" placeholder="Necessidade" class="form-control" autofocus="autofocus" />
            </div>

            <div class="form-group">
                <input type="text" name="amount" placeholder="Gastos" class="form-control" />
            </div>

            <div class="form-group">
                <textarea name="description" placeholder="Descrição" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>

        @if(session('title'))
            <div class="col-md-6">
                <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>

                    <strong>{{ session('title') }}!</strong> {{ session('description') }}
                </div>
            </div>
        @endif

    </div>

@endsection