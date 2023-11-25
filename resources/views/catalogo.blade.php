@extends('layouts.app')
@section('conteudo')

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">Publique</span>
                                <span class="d-block text-dark">Suas Fotos</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="products section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5">Cães</h2>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="{{ asset('assets/images/product/capelinha.jpg')}}" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">


                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link">Capelinha</a>
                                        </h5>

                                        <p class="product-p">Uma cachorrinha de 9 anos que vivia amarrada na frente de uma capela com o corpo cheio de sarna. Ela é dócil, carinhosa e precisa de uma família que possa lhe dar muito amor e cuidados. É de porte médio.</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">Adotar</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="{{ asset('assets/images/product/madalena.jpg')}}" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">


                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link">Madalena</a>
                                        </h5>

                                        <p class="product-p">Perfeita para fazer companhia, é a cachorrinha mais dócil e calma que você vai conhecer. Ela tem 5 anos, é de porte médio, é super dócil e amigável com outros animais.</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">Adotar</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="{{ asset('assets/images/product/pedrita.jpg')}}" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link">Pedrita</a>
                                        </h5>

                                        <p class="product-p">Uma menina que foi resgatada das ruas, já sofreu muito e é um pouco tímida. Ela tem 8 anos e tem de porte médio. Pedrita é carinhosa e não vê a hora de encontrar uma família para chamar de sua.</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">Adotar</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <h2 class="mb-5">Gatos</h2>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="{{ asset('assets/images/product/biba.jpg')}}" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">


                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link">Biba</a>
                                        </h5>

                                        <p class="product-p">Biba é uma menina de 2 anos, muito divertida e carinhosa que está em busca de um lar.</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">Adotar</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="{{ asset('assets/images/product/matheus.jpg')}}" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link">matheus</a>
                                        </h5>

                                        <p class="product-p">Matheus tem 2 anos, é muito doce, divertido, carinhoso, mas um pouco assustado por todo abandono que já sofreu.</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">Adotar</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="{{ asset('assets/images/product/peto.jpg')}}" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link">Peto</a>
                                        </h5>

                                        <p class="product-p">Peto é um machinho de 6 anos que é mais “na dele”. Não gosta de colo e costuma ficar embaixo do sofá.</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">Adotar</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endsection