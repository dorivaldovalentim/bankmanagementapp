@extends('layouts.auth')

@section('content')

    <section class="login-content">

        <div class="logo">
            <h1>BankManagement</h1>
        </div>

        <div class="login-box">

            <form action="{{ route('register') }}" method="POST" class="login-form">
                @csrf

                <h3 class="login-head">
                    <i class="fa fa-lg fa-fw fa-user"></i>
                    Cadastrar conta
                </h3>
                
                <div class="form-group">
                    
                    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" />
                   
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    
                    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" />
                   
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">

                    <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" />

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <input type="password" id="password-confirm" name="password_confirmation" placeholder="Confirmar senha" class="form-control" />
                </div>
                
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fa fa-sign-in fa-lg fa-fw"></i>
                        Entrar
                    </button>

                    <p class="semibold-text mb-2 text-center">
                        Já tem uma conta ? 
                        <a href="{{ route('login') }}">
                            Inicie sessão
                        </a>
                    </p>
                </div>

            </form>
            
        </div>

    </section>

@endsection
