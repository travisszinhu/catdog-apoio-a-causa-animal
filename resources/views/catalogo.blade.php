@extends('layouts.app')
@section('conteudo')

            <header class="position-relative site-header section-padding d-flex justify-content-center align-items-center">
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
                <a class="position-absolute btn btn-dark btn-adotar"  href="{{route('adocao.formulario')}}">Cadastre um pet aqui</a>
            </header>


            <section class="products section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5">Cães</h2>
                        </div>
                        @foreach ($caes as $cao )


                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="{{ Voyager::image($cao->foto)}}" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">


                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link">{{$cao->nome}}</a>
                                        </h5>

                                        <p class="product-p">{{$cao->descricao}}</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">
                                    @if ($cao->dono_id == null)
                                        Adotar
                                    @else
                                        Adotado
                                    @endif
                                    </small>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <div class="col-12">
                            <h2 class="mb-5">Gatos</h2>
                        </div>
                        @foreach ($gatos as $gato )
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="{{Voyager::image($gato->foto)}}" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">


                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link">{{$gato->nome}}</a>
                                        </h5>

                                        <p class="product-p">{{$gato->descricao}}</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">
                                        @if ($gato->dono_id == null)
                                        Adotar
                                    @else
                                        Adotado
                                    @endif</small>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>
        @endsection