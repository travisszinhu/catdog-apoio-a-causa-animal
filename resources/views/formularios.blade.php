@extends('layouts.app')
@section('conteudo')

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-dark">Resultados de pesquisa </span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="products section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5">Dados Coletados</h2>
                        </div>

                        <section class="product-detail section-padding">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-6 col-12">
                                        <div class="product-thumb">
                                            <img src="{{ asset('assets/grafico/grafico1.png')}}" class="img-fluid product-image" alt="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="product-info d-flex">
                                            <div>
                                                <h5 class="product-title mb-0">Com qual frequência você costuma encontrar animais abandonados nas ruas?</h5>
                                                <p class="product-p">31 respostas</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="product-detail section-padding">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-6 col-12">
                                        <div class="product-thumb">
                                            <img src="{{ asset('assets/grafico/grafico20.png')}}" class="img-fluid product-image" alt="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="product-info d-flex">
                                            <div>
                                                <h5 class="product-title mb-0">Você costuma encontrar mais cachorro ou gato abandonado nas ruas?</h5>
                                                <p class="product-p">31 respostas</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="product-detail section-padding">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-6 col-12">
                                        <div class="product-thumb">
                                            <img src="{{ asset('assets/grafico/grafico3.png')}}" class="img-fluid product-image" alt="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="product-info d-flex">
                                            <div>
                                                <h5 class="product-title mb-0">Com qual frequência você costuma saber de pessoas que perderam seu animal de estimação?
                                                </h5>
                                                <p class="product-p">31 respostas</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="product-detail section-padding">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-6 col-12">
                                        <div class="product-thumb">
                                            <img src="{{ asset('assets/grafico/grafico4.png')}}" class="img-fluid product-image" alt="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="product-info d-flex">
                                            <div>
                                                <h5 class="product-title mb-0">Quantas vezes você já perdeu algum animal de estimação?</h5>

                                                <p class="product-p">31 respostas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="product-detail section-padding">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-6 col-12">
                                        <div class="product-thumb">
                                            <img src="{{ asset('assets/grafico/grafico5.png')}}" class="img-fluid product-image" alt="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="product-info d-flex">
                                            <div>
                                                <h5 class="product-title mb-0">Qual é a dificuldade para encontrar animais abandonados?
                                                </h5>

                                                <p class="product-p">31 respostas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="product-detail section-padding">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-6 col-12">
                                        <div class="product-thumb">
                                            <img src="{{ asset('assets/grafico/grafico6.png')}}" class="img-fluid product-image" alt="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="product-info d-flex">
                                            <div>
                                                <h5 class="product-title mb-0">Você já adotou algum animal abandonado?
                                                </h5>

                                                <p class="product-p">31 respostas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="product-detail section-padding">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-6 col-12">
                                        <div class="product-thumb">
                                            <img src="{{ asset('assets/grafico/grafico7.png')}}" class="img-fluid product-image" alt="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="product-info d-flex">
                                            <div>
                                                <h5 class="product-title mb-0">Você gostaria que existisse alguma página na internet que ajudasse pessoas e/ou voluntários para ajudar nessa questão de animais abandonados?</h5>

                                                <p class="product-p">31 respostas
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
        @endsection
