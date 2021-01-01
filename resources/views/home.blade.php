@extends('layouts.app')

@section('content')

    <div class="app-title">
        <div>
            <h1><i class="fa fa-home"></i> Página inicial</h1>
            <p>A sua página inicial</p>
        </div>

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">BankManagement</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-credit-card fa-3x"></i>

                <div class="info">
                    <h4>Cartões</h4>
                    <p><b>{{ $data['cards'] }}</b></p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon">
                <i class="icon fa fa-money-bill-alt fa-3x"></i>

                <div class="info">
                    <h4>Em contas</h4>
                    <p><b>{{ number_format($data['amount'], 2, ',', '.') }} KZs</b></p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon">
                <i class="icon fa fa-money-bill-alt fa-3x"></i>

                <div class="info">
                    <h4>Necessidades</h4>
                    <p><b>{{ number_format($data['needs'], 2, ',', '.') }} KZs</b></p>
                </div>
            </div>
        </div>
    </div>

@endsection
