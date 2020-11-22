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

    </section>


    <section class="about-section" id="nuevo">
        <div class="container">
            <h3 class="titulo-servicios">NUESTROS PRODUCTOS</h3>


            <p class="parrafos-nosotros">Comprometidos con nuestros clientes para crear soluciones integrales, únicas y
                ecológicas de larga duración, no invasivas contamos con un gel, un sanitizante y un producto a base de
                coloides</p>

            <div class="row">
                <div class="col-lg-6 d-flex color-contenedor">
                    <div class="about-img">
                        <img class="img-fluid" src="../img/productos/7.png" alt="image-landing">
                    </div>


                </div>
                <div class="col-lg-6 order-first order-lg-last">
                    <div class="section-title">
                        <h2 class="title">Gel Antibacterial</h2>
                        <h5 class="subtitle">Con Coloides de Plata</h5>
                    </div>
                    <div class="about-content">
                        <p>Descripcion del producto</p>
                        <ul class="list-unstyled">
                            <li class=""> <i class="fas fa-check"></i> Elimina gérmenes, bacteria, virus,
                                hongos y otros organismos dañinos para la piel </li>
                            <li class=""><i class="fas fa-check"></i> 70% alcohol etílico</li>
                            <li class=""><i class="fas fa-check"></i> Solución ionizada de plata</li>
                            <li class=""><i class="fas fa-check"></i> Glicerina</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 d-flex color-contenedor2">
                    <div class="about-img">
                        <img class="img-fluid" src="../img/productos/1.png" alt="image-landing">
                    </div>


                </div>
                <div class="col-lg-6 order-first order-lg-first">
                    <div class="section-title">
                        <h2 class="title">Solución de Plata Coloidal</h2>
                        <h5 class="subtitle">Bactericida y antiviral con beneficios de la plata coloidal</h5>
                    </div>
                    <div class="about-content">
                        <p>Descripcion del producto</p>
                        <ul class="list-unstyled">
                            <li class=""> <i class="fas fa-check"></i> Se puede usar para esterilizar, rociar o tomar</li>
                            <li class=""><i class="fas fa-check"></i> Presentación de mayor concentración para un mejor
                                rendimiento</li>
                            <li class=""><i class="fas fa-check"></i> Facilidad de dilución en agua purificada</li>
                            <li class=""><i class="fas fa-check"></i> Con los beneficios propios de la plata que actúa como
                                bactericida y antiviral</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 d-flex color-contenedor3">
                    <div class="about-img">
                        <img class="img-fluid" src="../img/productos/13.png" alt="image-landing">
                    </div>


                </div>
                <div class="col-lg-6 order-first order-lg-last">
                    <div class="section-title">
                        <h2 class="title">Active Level </h2>
                        <h5 class="subtitle">Solución antiviral y bactericida, ingerible</h5>
                    </div>
                    <div class="about-content">
                        <p>Descripcion del producto</p>
                        <ul class="list-unstyled">
                            <li class=""> <i class="fas fa-check"></i> Solución de iones de plata</li>
                            <li class=""><i class="fas fa-check"></i> Agua purificada con coloides de plata a 10 ppm</li>
                            <li class=""><i class="fas fa-check"></i> Para adultos y niños</li>
                            <li class=""><i class="fas fa-check"></i> Antiviral y bactericida</li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </section>





@endsection
