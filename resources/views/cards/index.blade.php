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
            <li class="breadcrumb-item"><a href="#">Cards</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ route('card.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i>
            </a>
        </div>

        @forelse ($cards as $card)

            <a href="{{ route('card.show', $card->id) }}" class="col-md-4 text-white">

                <div class="card" style="background: {{ $card->bank->color }}">
                    
                    <div class="card-body">
                        <h2 class="card-title">{{ $card->bank->name }}</h2>
                        <p class="card-text">IBAN: {{ $card->iban }}</p>
                        <p class="card-text">Número: {{ $card->number }}</p>
                        <p class="card-text">Data de expiração: {{ $card->expires_at }}</p>
                    </div>

                </div>
        
            </a>
        
        @empty
            <p>Não há cartões</p>
        @endforelse

    </div>

@endsection