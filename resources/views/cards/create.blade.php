@extends('layouts.app')

@section('content')

    <div class="app-title">
        <div>
            <h1>
                <i class="fas fa-ad"></i>
                Gestão de Cartões
            </h1>

            <p>A sua página de cartões</p>
        </div>

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('home') }}">BankManagement</a></li>
            <li class="breadcrumb-item"><a href="{{ route('cards.list') }}">Cards</a></li>
            <li class="breadcrumb-item"><a href="#">Create</a></li>
        </ul>
    </div>

    <div class="row">

        <div class="col-md-12 mb-3">
            <a href="{{ route('cards.list') }}" class="btn btn-danger" data-toggle="tooltip" title="Voltar">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>

        <form action="{{ route('card.store') }}" method="POST" class="col-md-6">
            @csrf

            <div class="form-group">
                <input type="text" name="number" placeholder="Número do cartão" class="form-control"  autofocus="autofocus" />
            </div>

            <div class="form-group">
                <input type="text" name="iban" placeholder="IBAN do cartão" class="form-control" />
            </div>

            <div class="form-group">
                <input type="date" name="expires_at" placeholder="" class="form-control" />
            </div>

            <div class="form-group">
                <select name="bank_id" class="form-control">
                    <option value="">Selecione o banco</option>
                    
                    @foreach($banks as $bank)
                        <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                    @endforeach
                </select>
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