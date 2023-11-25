@extends('layouts.app')

@section('conteudo')
<section class="sign-in-form section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mx-auto col-12">

                <h1 class="hero-title text-center mb-5">Registre-se</h1>

                <div class="social-login d-flex flex-column w-50 m-auto">

                    <a href="#" class="btn custom-btn social-btn mb-4">
                        <i class="bi bi-google me-3"></i>

                        Continue com o Google
                    </a>

                    <a href="#" class="btn custom-btn social-btn">
                        <i class="bi bi-facebook me-3"></i>

                        Continue com o Facebook
                    </a>
                </div>

                <div class="div-separator w-50 m-auto my-5"><span>OU</span></div>

                <div class="row">
                    <div class="col-lg-8 col-11 mx-auto">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf


                            <div class="form-floating mb-4" >
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="name">Nome</label>
                            </div>

                            <div class="form-floating">
                                <input id="email" type="email" pattern="[^ @]*@[^ @]*" placeholder="Email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email">Email</label>
                            </div>

                            <div class="form-floating my-4">
                                <input id="password" pattern="[0-9a-zA-Z]{4,10}" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password">Senha</label>

                                <p class="text-center">4-10 carácter contendo letras de A-Z e números</p>
                            </div>

                            <div class="form-floating">
                                 <input id="confirm_password" type="password" placeholder="Password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <label for="confirm_password">Digite a senha novamente</label>
                            </div>

                            <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                Criar conta
                            </button>

                            <p class="text-center">Você já tem uma conta?<a href="login.html"> LOGAR</a></p>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
