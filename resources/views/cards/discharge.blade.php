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
            <li class="breadcrumb-item"><a href="#">Discharge</a></li>
        </ul>
    </div>

    <div class="row">

        <div class="col-md-12 mb-3">
            <a href="{{ route('card.show', $card->id) }}" class="btn btn-danger" data-toggle="tooltip" title="Voltar">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>

        <form action="{{ route('card.discharge', $card->id) }}" method="POST" class="col-md-6">
            @csrf

            @METHOD('put')

            <div class="form-group">
                <input type="text" name="amount" placeholder="Valor em kzs" class="form-control" />
            </div>

            <div class="form-group">
                <select name="reference" class="form-control">
                    <option value="">Onde quer retirar?</option>
                    <option value="0">Geral</option>
                    <option value="forme">Para Mim</option>
                    <option value="savings">Poupanças</option>
                    <option value="expenses">Despesas</option>
                </select>
            </div>

            <div class="form-group">
                <textarea name="description" id="description" placeholder="Descrição" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Retirar</button>
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