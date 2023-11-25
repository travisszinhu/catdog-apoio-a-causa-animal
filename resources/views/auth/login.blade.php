@extends('layouts.app')

@section('conteudo')
<section class="sign-in-form section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mx-auto col-12">

                <h1 class="hero-title text-center mb-5">LOGIN</h1>

                <div class="row">
                    <div class="col-lg-8 col-11 mx-auto">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-floating mb-4 p-0">
                                <input id="email" type="email" placeholder="Email address" pattern="[^ @]*@[^ @]*" class="form-control"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email">Email ou Número de Telefone</label>
                            </div>

                            <div class="form-floating p-0">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password">Senha</label>
                            </div>

                            <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                LOGIN
                            </button>

                            <p class="text-center">Ainda não tem uma conta? <a href="{{route('register')}}">Registre-se</a></p>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
