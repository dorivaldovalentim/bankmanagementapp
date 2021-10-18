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
                            <input type="date" class="form-control" name="begins_at" />
                            <small class="text-secondary">Data inicial</small>
                        </div>

                        <div class="form-group mx-1 text-center">
                            <input type="date" class="form-control" name="ends_at" />
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
