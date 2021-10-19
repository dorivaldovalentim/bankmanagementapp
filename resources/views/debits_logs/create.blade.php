@extends('layouts.app')

@section('content')

    <div class="app-title">
        <div>
            <h1>
                <i class="fas fa-ad"></i>
                Gestão de Logs de Dívidas
            </h1>

            <p>A sua página de logs dívidas</p>
        </div>

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('home') }}">BankManagement</a></li>
            <li class="breadcrumb-item"><a href="{{ route('debits.list') }}">Debits</a></li>
            <li class="breadcrumb-item"><a href="{{ route('debits_logs.list', $debit->id) }}">Debits Logs</a></li>
            <li class="breadcrumb-item"><a href="#">Create</a></li>
        </ul>
    </div>

    <div class="row">

        <div class="col-md-12 mb-3">
            <a href="{{ route('debits.list') }}" class="btn btn-danger" data-toggle="tooltip" title="Voltar">
                <i class="fas fa-arrow-left"></i>
            </a>

            <h3 class="text-danger mt-2">
                {{ $debit->name }}
                <small class="text-secondary">
                    Dívida: 
                    {!! $debit->type == 'I' ? '<span class="text-success">+' . number_format($debit->amount, 2, ',', '.') . ' KZs</span>' : '<span class="text-danger">-' . number_format($debit->amount, 2, ',', '.') . ' KZs</span>' !!}
                </small>
            </h3>
        </div>

        <form action="{{ route('debits_log.store', $debit->id) }}" method="POST" class="col-md-6">
            @csrf

            <div class="form-group">
                <input type="text" name="amount" placeholder="Montante" class="form-control" autofocus="autofocus" />
            </div>

            <div class="form-group">
                <select name="type" class="form-control">
                    <option value="">Tipo</option>
                    <option value="O">Eu pagando / emprestando</option>
                    <option value="I">Eu recebendo / pedindo emprestado</option>
                </select>
            </div>

            <div class="form-group">
                <textarea name="description" id="description" placeholder="Descrição" rows="10"
                    class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>

        @if (session('title'))
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
