@extends('layouts.auth')

@section('content')

    <section class="login-content">

        <div class="logo">
            <h1>BankManagement</h1>
        </div>

        <div class="login-box">

            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf

                <h3 class="login-head">
                    <i class="fa fa-lg fa-fw fa-user"></i>
                    Iniciar sessão
                </h3>
                
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
                    <div class="utility">
                        <div class="animated-checkbox">
                            <label>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                <span class="label-text">Manter logado</span>
                            </label>
                        </div>

                        <p class="semibold-text mb-2">
                            <a href="{{ route('password.request') }}">
                                Esqueceu a senha ?
                            </a>
                        </p>

                    </div>
                </div>
                
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fa fa-sign-in fa-lg fa-fw"></i>
                        Entrar
                    </button>

                    <p class="semibold-text mb-2">
                        Ainda não tem uma conta ? 
                        <a href="{{ route('register') }}">
                            Cadastre-se já
                        </a>
                    </p>
                </div>

            </form>
            
        </div>

    </section>

@endsection
