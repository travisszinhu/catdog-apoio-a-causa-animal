<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon_io/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon_io/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon_io/favicon-16x16.png')}}">
        <link rel="manifest" href="{{ asset('assets/images/favicon_io/site.webmanifest')}}">
        <link rel="mask-icon" href="{{ asset('assets/images/favicon_io/safari-pinned-tab.svg')}}" color="#5bbad5">

        <title>CATDOG</title>

        <!-- CSS FILES -->
       <!-- <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
       -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}"/>

        <link href="{{ asset('assets/css/tooplate-little-fashion.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/estilo.css')}}" rel="stylesheet">

    </head>

    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <strong><span>CAT</span> DOG</strong>
                        <img src="{{ asset('assets/images/logos/logo_preto.png')}}" width="55">
                    </a>
                    <!--
                    <img width="525" height="204" src="/sitetcc2/images/CATDOG.jpg" class="attachment-large size-large wp-image-4015 lazyloaded" alt="" sizes="100vw">
-->

                    <div class="d-lg-none">
                        <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

                        <a href="product-detail.html" class="bi-bag custom-icon"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('duvidas')}}">Dúvidas</a>

                            </li>

                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('formularios')}}">Formulários</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('catalogo')}}">Posts/adoção</a>
                            </li>
                            @endauth
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('suporte')}}">Suporte</a>
                            </li>
                        </ul>
                        @guest

                        <div class="d-none d-lg-block">
                            <a href="{{route('login')}}">Login</a>
                            <a href="{{route('login')}}" class="bi-person custom-icon me-3"></a>

                        </div>
                        <div class="d-none d-lg-block">
                            <a href="{{route('register')}}">Registre</a>
                            <a href="{{route('register')}}" class="bi-person custom-icon me-3"></a>
                        </div>
                        @endguest
                    </div>
                </div>
            </nav>

            @yield('conteudo')

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="index.html">CAT</a> DOG</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">CATDOG2023IFMS@GMAIL.COM</p>
                        <br>
                        <p class="copyright-text">Designed by <a href="" target="_blank">Alfredo e Gabriel

                        </a></p>
                    </div>


                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/Headroom.js')}}"></script>
        <script src="{{ asset('assets/js/jQuery.headroom.js')}}"></script>
        <script src="{{ asset('assets/js/slick.min.js')}}"></script>
        <script src="{{ asset('assets/js/custom.js')}}"></script>

    </body>
</html>
