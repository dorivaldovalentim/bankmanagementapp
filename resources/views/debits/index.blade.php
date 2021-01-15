@extends('layouts.app')

@section('content')

    <div class="app-title">
        <div>
            <h1>
                <i class="fas fa-ad"></i>
                Gestão de Dívidas
            </h1>

            <p>A sua página de dívidas</p>
        </div>

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('home') }}">BankManagement</a></li>
            <li class="breadcrumb-item"><a href="#">Debits</a></li>
        </ul>
    </div>

    <div class="row">

        <div class="col-md-12 mb-3">
            <a href="{{ route('debit.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i>
            </a>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-money-bill-wave fa-3x"></i>
    
                <div class="info">
                    <h4>Para desfrutar</h4>
                    <p><b>{{ number_format($data['debits_to_desfruit'], 2, ',', '.') }} KZs</b></p>
                </div>
            </div>
        </div>
    
        <div class="col-md-6 col-lg-4">
            <div class="widget-small info coloured-icon">
                <i class="icon fa fa-user fa-3x"></i>
    
                <div class="info">
                    <h4>Por receber</h4>
                    <p><b>{{ number_format($data['debits_to_receive'], 2, ',', '.') }} KZs</b></p>
                </div>
            </div>
        </div>
    
        <div class="col-md-6 col-lg-4">
            <div class="widget-small warning coloured-icon">
                <i class="icon fa fa-box fa-3x"></i>
    
                <div class="info">
                    <h4>Preciso dar</h4>
                    <p><b>{{ number_format($data['debits_to_give'], 2, ',', '.') }} KZs</b></p>
                </div>
            </div>
        </div>

        <div class="col-md-12">
        
            <div class="card">
                
                <div class="card-body p-0">

                    <div class="table-responsive">
                        <table class="table table-condensed table-hover m-0">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Montante</th>
                                    <th>Última actualização</th>
                                    <th class="text-center">Ação</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @forelse($debits as $debit)
                                    <tr>
                                        <td>{{ $debit->name }}</td>
                                        <td>{{ number_format($debit->amount, 2, ',', '.') }} KZs</td>
                                        <td>{{ $debit->updated_at }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('debits_logs.list', $debit->id) }}" class="btn btn-success btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            
                                            <a href="{{ route('debit.edit', $debit->id) }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            
                                            <a href="{{ route('debits_log.create', $debit->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <th colspan="4" class="text-center">Não há dívidas para apresentar</th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
                
            </div>

            <div class="d-flex justify-content-end mt-3">
                {!! $debits->links() !!}
            </div>
            
        </div>

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