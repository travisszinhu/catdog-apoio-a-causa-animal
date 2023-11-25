@extends('layouts.app')
@section('conteudo')

            <header class="site-header section-padding-img site-header-image">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 header-info">
                            <h1>
                                <span class="d-block text-primary">Precisa de ajuda?</span>
                                <span class="d-block text-dark">Achou algum erro?</span>
                            </h1>
                        </div>
                    </div>
                </div>

               <!-- <img src="images/header/gato2.jpg" class="header-image img-fluid"> -->
            </header>

            <section class="contact section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">DIGITE<span>AQUI</span></h2>

                            <form class="contact-form me-lg-5 pe-lg-3" role="form">

                                <div class="form-floating">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>

                                    <label for="name">NOME</label>
                                </div>

                                <div class="form-floating my-4">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>

                                    <label for="email">EMAIL</label>
                                </div>

                                <div class="form-floating my-4">
                                    <input type="subject" name="subject" id="subject"class="form-control" placeholder="Subject" required>

                                    <label for="subject">TIPO DE ASSUNTO</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <textarea id="message" name="message" class="form-control" placeholder="Leave a comment here" required style="height: 160px"></textarea>

                                    <label for="message">DIGITE AQUI</label>
                                </div>

                                <div class="col-lg-5 col-6">
                                    <button type="submit" class="form-control">ENVIAR</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 ms-auto">
                            <div class="row">
                                <div class="col-6 border-end contact-info">
                                    <h6 class="mb-3">Email</h6>

                                    <a href="mailto:catdog2023ifms@gmail.com" class="custom-link">
                                        CATDOG2023IFMS@GMAIL.COM
                                        <i class="bi-arrow-right ms-2"></i>
                                    </a>
                                </div>

                                <div class="col-6 contact-info">
                                	<h6 class="mb-3">Designed by</h6>

                                    <a href="mailto:catdog2023ifms@gmail.com" class="custom-link">
                                        Alfredo e Gabriel
                                        <i class="bi-arrow-right ms-2"></i>
                                    </a>
                                </div>

                                <div class="col-6 border-top border-end contact-info">
                                    <h6 class="mb-3">Apoiadores na criação do site</h6>

                                    <p class="text-muted">Prof:Alan e Aurélio</p>
                                </div>

                                <div class="col-6 border-top contact-info">
                                    <h6 class="mb-3">Social</h6>

                                    <ul class="social-icon">

                                        <li><a href="mailto:catdog2023ifms@gmail.com" class="social-icon-link bi-instagram"></a></li>

                                        <li><a href="mailto:catdog2023ifms@gmail.com" class="social-icon-link bi-whatsapp"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endsection