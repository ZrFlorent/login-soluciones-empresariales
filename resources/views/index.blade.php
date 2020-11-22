<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>ATIR</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Jhonatan Shop template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" contentS="{{ csrf_token() }}">


    <!-- Favicons -->
    <link href="asse/assets/img/favicon.png" rel="icon">
    <link href="asse/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/styles/responsive.css') }}">
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="asse/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="asse/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="asse/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="asse/assets/css/style.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/estiloproductos.css') }}" rel="stylesheet">


</head>

<body>

    <!-- Menu -->
    <div id="app">

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top ">
            <div class="container-fluid d-flex align-items-center justify-content-between">

                <h1 class="logo"><a href="index.html">ATIR</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="asse/asse/assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="/">Inicio</a></li>
                        <li><a href="#about">Nosotros</a></li>
                        <li><a href="/Nuestros-productos">Productos</a></li>
                        <li><a href="portfolio">Blog</a></li>
                        <li><a href="#team">Servicios</a></li>

                        <li><a href="#contact">Contacto</a></li>

                    </ul>
                </nav><!-- .nav-menu -->


            </div>
        </header><!-- End Header -->
        <section id="hero">

            <!-- Home -->

            <div class="home">
                <!-- Home Slider -->
                <div class="home_slider_container">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($principal as $slider)

                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                                    class="{{ $loop->first ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">

                            @foreach ($principal as $slider)

                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="background_image" style="background-image:url(asset/images/fondo3.png)">
                                    </div>

                                    <div class="container home-container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="container fill_height">
                                                    <div class="row fill_height">
                                                        <div class="col fill_height">
                                                            <div
                                                                class="home_container d-flex flex-column align-items-center justify-content-start">
                                                                <div class="home_content">

                                                                    <div class="home_items">
                                                                        <div class="row">
                                                                            <div class="col-sm-3 offset-lg-1">
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-8 col-md-12 col-sm-8 offset-sm-2 offset-md-0">
                                                                                <div class="product home_item_large">
                                                                                    <div
                                                                                        class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                                                        <div>
                                                                                            <div>A</div>
                                                                                            <div>
                                                                                                {{ $slider->precio_actual }}
                                                                                            </div>
                                                                                            <del
                                                                                                class="price-oldslider">{{ $slider->precio_anterior }}</del>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product_image mx-auto">
                                                                                        <img class="img-slider mx-auto"
                                                                                            src="{{ $slider->images->random()->url }}"
                                                                                            alt="">
                                                                                    </div>
                                                                                    <div class="product_content">
                                                                                        <div class="product_buttons">
                                                                                            <div
                                                                                                class="text-right d-flex flex-row align-items-start justify-content-start">
                                                                                                <div
                                                                                                    class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                                                    <div>
                                                                                                        <div><img
                                                                                                                src="asset/images/cart_2.svg"
                                                                                                                alt="">
                                                                                                            <div>+</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
                                                    <h1>{{ $slider->nombre }}</h1>
                                                    <h2>{!! $slider->descripcion_corta !!}</h2>
                                                    <div class="d-flex">
                                                        <a href=" {{ route('Nuestros-productos.show', $slider->slug) }}"
                                                            class="add-to-cart-btn btn-blanco ripple btn-primary"
                                                            style="padding-top: 10px;">Ver
                                                            productos</a>

                                                        <a href="{{ route('Nuestros-productos.show', $slider->slug) }}"
                                                            class="venobox btn-watch-video" data-vbtype="video"
                                                            data-autoplay="true"> Informacion<i
                                                                class="icofont-play-alt-2"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>
            </div>
        </section><!-- End Hero -->



        <main id="main">

            <!-- ======= About Boxes Section ======= -->
            <section id="about-boxes" class="about-boxes">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="owl-carousel" id="product-carousel">

                            @foreach ($prod as $producto)
                                <div class="col-lg-12 col-md-12 d-flex align-items-stretch" data-aos="fade-up"
                                    data-aos-delay="100">

                                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 margen pad-top">
                                        <div class="card h-100 card-car">
                                            @if ($producto->images->count() <= 0)

                                                <div class="product_image ">
                                                    <a href="#"><img class="img-slider"
                                                            src="http://placehold.it/700x400" alt=""></a>
                                                </div>

                                            @else
                                                <div class="product_image">
                                                    <a href="{{ route('Nuestros-productos.show', $producto->slug) }}"><img
                                                            class="img-slider mx-auto"
                                                            src="{{ $producto->images->random()->url }}" alt=""></a>
                                                </div>
                                            @endif
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    <a
                                                        href="{{ route('Nuestros-productos.show', $producto->slug) }}">{{ $producto->nombre }}</a>
                                                </h4>
                                                <h5>$24.99</h5>
                                                <p class="card-text"> {!! $producto->descripcion_corta !!}

                                            </div>
                                            <div class="c-footer mx-auto">
                                                <a href=" {{ route('Nuestros-productos.show', $producto->slug) }}"
                                                    class="add-to-cart-btn btn-blanco ripple btn-primary"
                                                    style="padding-top: 10px;">Ver
                                                    productos</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>

                    </div>


                </div>
            </section><!-- End About Boxes Section -->
            <div class="bg-gray-800"><svg viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" class="wave-top">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                            <g fill="#2176bd" class="wave">
                                <path
                                    d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                                </path>
                            </g>
                            <g transform="translate(1.000000, 15.000000)" fill="#2176bd">
                                <g
                                    transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                                    <path
                                        d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                                        opacity="0.100000001"></path>
                                    <path
                                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                                        opacity="0.100000001"></path>
                                    <path
                                        d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                                        opacity="0.200000003"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg></div>

            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
                <div class="container" data-aos="fade-up">

                    <ul class="nav nav-tabs row d-flex">
                        @foreach ($cat as $categorias)
                            <li class="nav-item col-3">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }} show" data-toggle="tab"
                                    href="#{{ $categorias->slug }}">
                                    <i class="{{ $categorias->descripcion }}"></i>
                                    <h4 class="d-none d-lg-block">{{ $categorias->nombre }}</h4>
                                </a>
                            </li>
                        @endforeach


                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active show" id="alimentacion-funcional">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                    <h3 style="text-align: center; color: #1d68a7;">Alimentación Funcional</h3>

                                    <p class="font-italic" style="font-size: 25px; text-align: center;">
                                        Somos pioneros en el desarrollo de Alimentos fortificados que
                                        ofrecen las características de los productos de uso común
                                        pero con un alto valor nutritivo
                                    </p>
                                    <div style="text-align: center">
                                        <a href=" {{-- {{ route('Nuestros-productos.show', $producto->slug) }} --}}"
                                            class="add-to-cart-btn btn-blanco ripple btn-primary"
                                            style="padding-top: 10px;">Ver
                                            productos</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <a href=""><img src="{{ asset('img/alimentos.png') }}" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="care-home">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-2 mt-3 mt-lg-0">
                                    <h3 style="text-align: center; color: #1d68a7;">B-Care Home</h3>

                                    <p class="font-italic" style="font-size: 25px; text-align: center;">
                                        Ahora queremos estar más cerca de ti y formar parte de los
                                        bellos detalles de amor que existen en tu hogar, contribuyendo
                                        a mejorar tus actividades diarias.
                                    </p>
                                    <div style="text-align: center">
                                        <a href=" {{-- {{ route('Nuestros-productos.show', $producto->slug) }} --}}"
                                            class="add-to-cart-btn btn-blanco ripple btn-primary"
                                            style="padding-top: 10px;">Ver
                                            productos</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-1 text-center">
                                    <a href=""><img src="{{ asset('img/limpi.png') }}" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="cuidado-personal">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                    <h3 style="text-align: center; color: #1d68a7;">B-Care Cuidado personal</h3>

                                    <p class="font-italic" style="font-size: 25px; text-align: center;">
                                        Verse bien y sentirse bien es tarea de cada día. Gia ha
                                        desarrollado una gama de productos de cuidado personal que
                                        buscan ayudarte a cuidarte, a relajarte, a consentirte y claro a
                                        sentirte bien.
                                    </p>
                                    <div style="text-align: center">
                                        <a href=" {{-- {{ route('Nuestros-productos.show', $producto->slug) }} --}}"
                                            class="add-to-cart-btn btn-blanco ripple btn-primary"
                                            style="padding-top: 10px;">Ver
                                            productos</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <a href=""><img src="{{ asset('img/catcremas.png') }}" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="suplementos-alimenticios">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-2 mt-3 mt-lg-0">
                                    <h3 style="text-align: center; color: #1d68a7;">Nutraceutcos</h3>

                                    <p class="font-italic" style="font-size: 25px; text-align: center;">
                                        Contamos con una línea Nutracéutica de productos especiales
                                        para apoyar la nutrición de niños, jóvenes y adultos.
                                    </p>
                                    <div style="text-align: center">
                                        <a href=" {{-- {{ route('Nuestros-productos.show', $producto->slug) }} --}}"
                                            class="add-to-cart-btn btn-blanco ripple btn-primary"
                                            style="padding-top: 10px;">Ver
                                            productos</a>
                                    </div>

                                </div>
                                <div class="col-lg-6 order-1 order-lg-1 text-center">
                                    <a href=""><img src="{{ asset('img/catnt.png') }}" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section><!-- End Features Section -->





        </main><!-- End #main -->





        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info">
                                <h3>Dewi</h3>
                                <p>
                                    A108 Adam Street <br>
                                    NY 535022, USA<br><br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Our Newsletter</h4>
                            <p style="color: #1d68a7">Tamen quem nulla quae legam multos aute sint culpa legam noster
                                magna</p>
                            <form action="" method="post">
                                <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Dewi</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top"><i class="bx bxl-twitter"></i></a>
        <div id="preloader"></div>

    </div>


    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <link href="{{ asset('css/fontawesome/js/all.js') }}" rel="stylesheet">

    <script src="asse/assets/vendor/counterup/counterup.min.js"></script>
    <script src="asse/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="asse/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="asse/assets/js/main.js"></script>

    <script src="{{ asset('js/carouselproductos.js') }}"></script>
</body>

</html>
