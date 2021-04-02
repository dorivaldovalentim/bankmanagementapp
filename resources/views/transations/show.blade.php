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
        
            <div class="card">
                
                <div class="card-body p-0">

                    <div class="table-responsive">
                        <table class="table table-condensed m-0 table-sm">
                            <thead>
                                <tr>
                                    <th>Montante</th>
                                    <th>Onde</th>
                                    <th>Tipo</th>
                                    <th>Data</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @forelse($transations as $transation)
                                    <tr>
                                        <td>{{ number_format($transation->amount, 2, ',', '.') }} KZs</td>
                                        <td>{{ $transation->where }}</td>
                                        <td>
                                            <strong>
                                                {!!
                                                    $transation->type == 'I' ? '<span class="text-success">Entrada</span>' : '<span class="text-danger">Saída</span>'
                                                !!}
                                            </strong>
                                        </td>
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
