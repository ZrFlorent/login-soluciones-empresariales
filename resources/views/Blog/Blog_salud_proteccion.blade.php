@extends('Layouts.header')
@section('titulo', 'Tienda ATIR')


@section('contenido')
    <section class="cat-direccion">

        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-1">Geles y sanitizantes
            </h1>
            <h5 class="mt-1 mb-3"> <small>Productos de proteccion, salud y suplementos alimenticios </small>
            </h5>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/Blog-menu-informacion">Blog informativo</a>
                </li>
                <li class="breadcrumb-item active">Informacion de productos</li>
            </ol>

            <div class="row">

                <!-- Post Content Column -->
                <div class="col-lg-8">

                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="../img/productos/12.png" alt="">

                    <hr>

                    <!-- Date/Time -->
                    <p>23 de Julio de 2020</p>

                    <hr>

                    <!-- Post Content -->
                    <p class="lead">
                        Sanitizante y desinfectante de amplio espectro y muy largo poder residual, grado alimenticio no
                        aporta color, sabor ni olor, compuesto por iones de plata en suspensión. Altamente concentrado, muy
                        estable, no corrosivo ni oxidante. Versátil y de fácil manejo. Recomendable para frutas y verduras.

                        <br><br>
                        Ambos sanitizantes se puedes usar para charolas y tapetes de entrada, debido a su amplio espectro,
                        ideal en donde se requiere de una gran exigencia biocida. Se debe utilizar en tapete o charca
                        sanitaria previo al acceso a oficinas, escuelas, restaurantes y cualquier otra área.
                    </p>



                    <blockquote class="blockquote">
                        <p class="mb-0">Costos y presentaciones</p>
                        <footer class="blockquote-footer">Pesos Mx.
                            <cite title="Source Title">$</cite>
                        </footer>
                    </blockquote>

                    <img class="img-fluid rounded" src="../img/productos/tabla.png" alt="">
                    <br>
                    <cite title="Source Title">Nota: Estos precios no incluyen IVA ni gastos de envío, se pueden
                        personalizar las etiquetas</cite>


                    <hr>


                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Categories Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Categories</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">Gel antibacterial</a>
                                        </li>
                                        <li>
                                            <a href="#">Desinfectantes para usar contra SARS-CoV-2</a>
                                        </li>
                                        <li>
                                            <a href="#">Antisépticos y desinfectantes</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">¿Qué es un Desinfectante o Sanitizante?</a>
                                        </li>
                                        <li>
                                            <a href="#">Medidas de protección básicas contra el nuevo coronavirus</a>
                                        </li>
                                        <li>
                                            <a href="#">Tutoriales</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </section>


@endsection
