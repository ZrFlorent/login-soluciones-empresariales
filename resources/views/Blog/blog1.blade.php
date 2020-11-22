@extends('Layouts.header')
@section('titulo', 'Tienda ATIR')


@section('contenido')
    <section class="cat-direccion">

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/Blog-menu-informacion">Blog informativo</a>
            </li>
            <li class="breadcrumb-item active">Informacion de productos</li>
        </ol>



        <main role="main" class="container cont">
            <div class="row">
                <div class="col-md-8 blog-main">




                    <div class="blog-post lead">
                        <h2 class="blog-post-title">Preguntas y respuestas sobre la enfermedad por coronavirus (COVID-19)
                        </h2>
                        <h5 class="mt-1 mb-3"> <small>Para obtener más información, consulte regularmente las páginas de la
                                OMS sobre el coronavirus.</small></h5>

                        <img class="img-fluid rounded" src="./img/fondos/covid.png" alt="">
                        <p class="blog-post-meta">Agosto 1, 2020 by <a href="#">ATIR</a></p>

                        <p>La OMS está monitoreando y respondiendo continuamente a este brote. Estas preguntas y respuestas
                            se actualizarán a medida que se conozcan más datos sobre la COVID‑19, su modo de propagación y
                            la forma en que está afectando a las personas en todo el mundo.</p>
                        <hr>

                        <h3>¿Qué es un coronavirus?</h3>
                        <p>Los coronavirus son una extensa familia de virus que pueden causar enfermedades tanto en animales
                            como en humanos. En los humanos, se sabe que varios coronavirus causan infecciones respiratorias
                            que pueden ir desde el resfriado común hasta enfermedades más graves como el síndrome
                            respiratorio de Oriente Medio (MERS) y el síndrome respiratorio agudo severo (SRAS). El
                            coronavirus que se ha descubierto más recientemente causa la enfermedad por coronavirus
                            COVID-19.</p>



                        <h3>¿Qué es la COVID‑19?</h3>
                        <p>La COVID‑19 es la enfermedad infecciosa causada por el coronavirus que se ha descubierto más
                            recientemente. Tanto este nuevo virus como la enfermedad que provoca eran desconocidos antes de
                            que estallara el brote en Wuhan (China) en diciembre de 2019. Actualmente la COVID‑19 es una
                            pandemia que afecta a muchos países de todo el mundo.</p>

                        <h3>¿Cuáles son los síntomas de la COVID-19?</h3>
                        <p>Los síntomas más habituales de la COVID-19 son la fiebre, la tos seca y el cansancio. Otros
                            síntomas menos frecuentes que afectan a algunos pacientes son los dolores y molestias, la
                            congestión nasal, el dolor de cabeza, la conjuntivitis, el dolor de garganta, la diarrea, la
                            pérdida del gusto o el olfato y las erupciones cutáneas o cambios de color en los dedos de las
                            manos o los pies. Estos síntomas suelen ser leves y comienzan gradualmente. Algunas de las
                            personas infectadas solo presentan síntomas levísimos.

                            La mayoría de las personas (alrededor del 80%) se recuperan de la enfermedad sin necesidad de
                            tratamiento hospitalario. Alrededor de 1 de cada 5 personas que contraen la COVID‑19 acaba
                            presentando un cuadro grave y experimenta dificultades para respirar. Las personas mayores y las
                            que padecen afecciones médicas previas como hipertensión arterial, problemas cardiacos o
                            pulmonares, diabetes o cáncer tienen más probabilidades de presentar cuadros graves. Sin
                            embargo, cualquier persona puede contraer la COVID‑19 y caer gravemente enferma. Las personas de
                            cualquier edad que tengan fiebre o tos y además respiren con dificultad, sientan dolor u
                            opresión en el pecho o tengan dificultades para hablar o moverse deben solicitar atención médica
                            inmediatamente. Si es posible, se recomienda llamar primero al profesional sanitario o centro
                            médico para que estos remitan al paciente al establecimiento sanitario adecuado.</p>

                        <h3>¿Cómo se propaga la COVID‑19?</h3>
                        <p>Una persona puede contraer la COVID‑19 por contacto con otra que esté infectada por el virus. La
                            enfermedad se propaga principalmente de persona a persona a través de las gotículas que salen
                            despedidas de la nariz o la boca de una persona infectada al toser, estornudar o hablar. Estas
                            gotículas son relativamente pesadas, no llegan muy lejos y caen rápidamente al suelo. Una
                            persona puede contraer la COVID‑19 si inhala las gotículas procedentes de una persona infectada
                            por el virus. Por eso es importante mantenerse al menos a un metro de distancia de los demás.
                            Estas gotículas pueden caer sobre los objetos y superficies que rodean a la persona, como mesas,
                            pomos y barandillas, de modo que otras personas pueden infectarse si tocan esos objetos o
                            superficies y luego se tocan los ojos, la nariz o la boca.</p>

                    </div><!-- /.blog-post -->



                    <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="#">Older</a>
                        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                    </nav>

                </div><!-- /.blog-main -->

                <aside class="col-md-4 blog-sidebar">

                    <div class="p-3">
                        <h4 class="font-italic">También te puede interesar</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">Gel antibacterial</a></li>
                            <li><a href="#">Desinfectantes contra SARS-CoV-2</a></li>
                            <li><a href="#">Antisépticos y desinfectantes</a></li>
                            <li><a href="#">¿Qué es un Desinfectante o Sanitizante?</a></li>
                            <li><a href="#">Medidas de protección contra el nuevo coronavirus</a></li>

                        </ol>
                    </div>

                    <div class="p-3 mb-3 bg-light rounded">
                        <h4 class="font-italic">Productos relacionados</h4>

                        <div class="products-item">
                            <div class="product-img">
                                <img src="../img/productos/8.png" alt="" class="card-imagen-carousel">
                                <div class="overlay d-flex">
                                    <a href="#" class="btn mybtn1">Más información</a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-price">
                                    <span class="new-price">Gel antibacterial, elimina gérmenes, bacterias, hongos y otros
                                        organismos dañinos para la piel</span>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="products-item">
                            <div class="product-img">
                                <img src="../img/productos/8.png" alt="" class="card-imagen-carousel">
                                <div class="overlay d-flex">
                                    <a href="#" class="btn mybtn1">Más información</a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-price">
                                    <span class="new-price">Gel antibacterial, elimina gérmenes, bacterias, hongos y otros
                                        organismos dañinos para la piel</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="products-item">
                            <div class="product-img">
                                <img src="../img/productos/8.png" alt="" class="card-imagen-carousel">
                                <div class="overlay d-flex">
                                    <a href="#" class="btn mybtn1">Más información</a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-price">
                                    <span class="new-price">Gel antibacterial, elimina gérmenes, bacterias, hongos y otros
                                        organismos dañinos para la piel</span>
                                </div>
                            </div>
                        </div>
                    </div>





                </aside><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </main><!-- /.container -->


    </section>

@endsection
