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
                        <h2 class="blog-post-title">GIA Evolution, Nutraly y GIA Live</h2>
                        <h5 class="mt-1 mb-3"> <small>Productos de proteccion, antibacteriales, sanitizantes y suplmentos
                                alimenticios </small></h5>

                        <br><br>

                        <div class="container img-cont">
                            <img class="img-fluid rounded" src="./img/fondos/lider.jpeg" alt="">

                        </div>
                        <br>

                        <h2>Nuestra Historia</h2>
                        <p>
                            Fundada en 1991 por Edgar Arroyo. GIA comenzó a desarrollar formulaciones químicas enfocadas en
                            una buena nutrición. Debido a sus excelentes métodos de investigación y tecnología, en solo
                            cuatro años de su fundación, GIA logró adquirir una importante presencia en el mercado nacional
                            e internacional. Autor del libro "En nombre de mi hijo", publicado por Random House Mondadori
                            (Editorial Grijalbo), en el que narra la batalla que un padre y una madre deben enfrentar cuando
                            luchan contra la enfermedad terminal de su hijo. Hoy, Edgar Arroyo continúa trabajando en la
                            investigación de vanguardia y el desarrollo de productos altamente nutritivos para todas las
                            familias, y especialmente ahora para los nuevos protocolos de saneamiento COVID-19 con
                            desinfectantes de primera línea con sus respectivos COFEPRIS y FDA para exportación. Edgar
                            Arroyo investigador y científico que logro la patente Protengia® siendo su principal ingrediente
                            natural el cual sirve de base para crear muchos nutrimentos.

                        </p>

                        <h2>Quienes somos</h2>
                        <p>GIA más que una empresa es una gran familia de colaboradores ocupados por lograr que las cosas
                            sucedan, unidos para crear un proyecto de vida.</p>


                        <h3>Misión </h3>
                        <p>GIA es una empresa humanamente comprometida, globalizada, eficiente, rentable y productiva, líder
                            en la investigación y el desarrollo de alimentos y suplementos alimenticios, así como productos
                            para el cuidado personal y la higiene, que crea experiencias extraordinarias en sus
                            colaboradores y consumidores internos y externos.</p>

                        <h3>Visión </h3>
                        <p>Ser una de las primeras cinco empresas más importantes en el país para el 2025, promoviendo una
                            alta calidad de vida.</p>

                        <h3>Filosofía </h3>
                        <p>GIA es una empresa en constante crecimiento, innovación, trabajando para el cuidado de nuestra
                            gran familia de colaboradores, amigos y clientes creando productos de primera calidad. </p>

                        <h3>Política de Calidad </h3>
                        <p>Nos comprometemos a diseñar, fabricar y comercializar alimentos, suplementos y productos de
                            cuidado personal que cumplan con las especificaciones de calidad y seguridad, mejorando
                            continuamente la eficacia de nuestro sistema de gestión integral, garantizando el cumplimiento
                            de los requisitos de los clientes, el personal, los accionistas, los colaboradores y las
                            entidades normativas.</p>

                        <div class="container img-cont">
                            <img class="img-fluid rounded" src="./img/fondos/image001.jpg" alt="">
                            <p class="blog-post-meta">Planta GIA por <a href="#">Ing. Rita Guadalupe López Sosa</a></p>

                        </div>

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
