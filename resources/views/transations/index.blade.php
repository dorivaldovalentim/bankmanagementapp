@extends('layouts.app')

@section('content')

    <div class="app-title">
        <div>
            <h1><i class="fa fa-home"></i> Transações</h1>
            <p>As suas transações</p>
        </div>

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('home') }}">BankManagement</a></li>
            <li class="breadcrumb-item"><a href="{{ route('cards.list') }}">Cards</a></li>
            <li class="breadcrumb-item"><a href="#">Transations</a></li>
        </ul>
    </div>

    <div class="container">

        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <div class="mb-3">
                    <a href="{{ route('cards.list') }}" class="btn btn-danger" data-toggle="tooltip" title="Voltar">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>

                <form action="{{ route('transations.search') }}" method="GET">
                    <div class="d-flex">
                        <div class="form-group mx-1 text-center">
                            <input type="search" class="form-control" name="description" value="{{ isset($_GET['description']) ? $_GET['description'] : '' }}" placeholder="Descrição" />
                            <small class="text-secondary">Descrição</small>
                        </div>

                        <div class="form-group mx-1 text-center">
                            <select name="type" class="form-control">
                                <option value="">Tipo</option>
                                <option value="I" {{ isset($_GET['type']) && $_GET['type'] == 'I' ? 'selected' : '' }}>Entrada</option>
                                <option value="O" {{ isset($_GET['type']) && $_GET['type'] == 'O' ? 'selected' : '' }}>Saída</option>
                            </select>
                            <small class="text-secondary">Tipo de transação</small>
                        </div>

                        <div class="form-group mx-1 text-center">
                            <select name="reference" class="form-control">
                                <option value="">Consultar transações de?</option>
                                <option value="Geral" {{ isset($_GET['reference']) && $_GET['reference'] == 'Geral' ? 'selected' : '' }}>Geral</option>
                                <option value="Para mim" {{ isset($_GET['reference']) && $_GET['reference'] == 'Para mim' ? 'selected' : '' }}>Para Mim</option>
                                <option value="Poupanças" {{ isset($_GET['reference']) && $_GET['reference'] == 'Poupanças' ? 'selected' : '' }}>Poupanças</option>
                                <option value="Despesas" {{ isset($_GET['reference']) && $_GET['reference'] == 'Despesas' ? 'selected' : '' }}>Despesas</option>
                            </select>
                            <small class="text-secondary">Onde?</small>
                        </div>

                        <div class="form-group mx-1 text-center">
                            <input type="date" class="form-control" name="begins_at" value="{{ isset($_GET['begins_at']) ? $_GET['begins_at'] : '' }}" />
                            <small class="text-secondary">Data inicial</small>
                        </div>

                        <div class="form-group mx-1 text-center">
                            <input type="date" class="form-control" name="ends_at" value="{{ isset($_GET['ends_at']) ? $_GET['ends_at'] : '' }}" />
                            <small class="text-secondary">Data final</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success ml-1">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        
            <div class="card">
                
                <div class="card-body p-0">

                    <div class="table-responsive">
                        <table class="table table-condensed m-0 table-sm">
                            <thead>
                                <tr>
                                    <th>Cartão</th>
                                    <th>Montante</th>
                                    <th>Onde</th>
                                    <th>Data</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @forelse($transations as $transation)
                                    <tr>
                                        <td>{{ $transation->card->id }}</td>
                                        <td>
                                            <strong>
                                                {!!
                                                    $transation->type == 'I' ? '<span class="text-success">+ ' . number_format($transation->amount, 2, ',', '.') . ' KZs</span>' : '<span class="text-danger">- ' . number_format($transation->amount, 2, ',', '.') . ' KZs</span>'
                                                !!}
                                            </strong>
                                        </td>
                                        <td>{{ $transation->where }}</td>
                                        <td>{{ $transation->created_at }}</td>
                                        <td>{{ $transation->description }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <th colspan="9" class="text-center">Não há transações para apresentar</th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
                
            </div>

            <div class="d-flex justify-content-end mt-3">
                {!! $transations->links() !!}
            </div>
            
        </div>

    </div>

@endsection
