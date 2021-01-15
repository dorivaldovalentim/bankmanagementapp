@extends('layouts.app')

@section('content')

    <div class="app-title">
        <div>
            <h1><i class="fa fa-home"></i> Logs de dívidas</h1>
            <p>Os seus logs de dívidas</p>
        </div>

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('home') }}">BankManagement</a></li>
            <li class="breadcrumb-item"><a href="{{ route('debits.list') }}">Debit</a></li>
            <li class="breadcrumb-item"><a href="#">Debits Logs</a></li>
        </ul>
    </div>

    <div class="container">

        <div class="col-md-12">
        
            <div class="card">
                
                <div class="card-body p-0">

                    <div class="table-responsive">
                        <table class="table table-condensed m-0">
                            <thead>
                                <tr>
                                    <th>Usuário</th>
                                    <th>Dívida de:</th>
                                    <th>Montante</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @forelse($debits_logs as $debits_log)
                                    <tr>
                                        <td>{{ $debits_log->user->name }}</td>
                                        <td>{{ $debits_log->debit->name }}</td>
                                        <td>{{ number_format($debits_log->amount, 2, ',', '.') }} KZs</td>
                                        <td>{{ $debits_log->created_at }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <th colspan="4" class="text-center">Não há logs de dívidas para apresentar</th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
                
            </div>

            <div class="d-flex justify-content-end mt-3">
                {!! $debits_logs->links() !!}
            </div>
            
        </div>

    </div>

@endsection
