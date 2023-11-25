@extends('layouts.app')
@section('conteudo')


<header class="site-header-gato section-padding d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12">
            </div>
        </div>
    </div>
</header>

<section class="faq section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12">
                <h2>Dúvidas sobre o Site</h2>

                <div class="accordion" id="accordionGeneral">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralOne" aria-expanded="true" aria-controls="accordionGeneralOne">
                            Qual o objetivo do site?
                            </button>
                        </h2>

                        <div id="accordionGeneralOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionGeneral">

                            <div class="accordion-body">
                                <p class="large-paragraph"><strong>Esse site tem como objetivo</strong>
                                    apoiar cachorros e gatos em situações de
                                    vulnerabilidade e ao trabalho de protetores de animais e
                                    voluntários de associações relacionadas,buscando
                                    divulgar animais disponíveis para adoção e/ou ajudar
                                    tutores que desejam encontrar seu pet perdido.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralTwo" aria-expanded="false" aria-controls="accordionGeneralTwo">
                            Como surgiu a ideia?
                            </button>
                        </h2>

                        <div id="accordionGeneralTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionGeneral">

                            <div class="accordion-body">
                                <p class="large-paragraph"><a href="https://www.tooplate.com/free-templates" target="_blank"></a> a região centro-
                                    oeste é carente de organizações com essa finalidade. Para atender a esses problemas, é comum que pessoas se mobilizem em trabalhos voluntários de modo a oferecer proteção, lar temporário, arrecadação de alimentos,remédios ou fundos para atendimentos clínicos.</p>
                                    <p class="large-paragraph"><a href="https://www.tooplate.com/free-templates" target="_blank"></a> Pensando nessas dificuldade surgiu a ideia de criar um site para ajudar na adoção de animais abandonados.</p>
                                 </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralThree" aria-expanded="false" aria-controls="accordionGeneralThree">
                          como posso contribuir para ajudar os animais no site?
                            </button>
                        </h2>

                        <div id="accordionGeneralThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionGeneral">

                            <div class="accordion-body">
                                <p class="large-paragraph">Você pode contribuir doando dinheiro, suprimentos ou oferecendo-se como voluntário para cuidar dos animais.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="accordion" id="accordionProduct">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductOne" aria-expanded="true" aria-controls="accordionProductOne">
                            Como posso adotar um animal através deste site?
                            </button>
                        </h2>

                        <div id="accordionProductOne" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionProduct">

                            <div class="accordion-body">
                                <p class="large-paragraph">Para adotar um animal, basta navegar pelo site, encontrar um animal que você goste e seguir o processo de adoção indicado</p>


                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductTwo" aria-expanded="false" aria-controls="accordionProductTwo">
                           Como posso entrar em contato com a equipe em caso de dúvidas ou preocupações?
                            </button>
                        </h2>

                        <div id="accordionProductTwo" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionProduct">

                            <div class="accordion-body">
                                <p class="large-paragraph">Você pode entrar em contato com a equipe do site através do formulario de contato disponivel na página de suporte ou enviando um e-mail para o endereço fornecido na mesma aba.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>


@endsection
