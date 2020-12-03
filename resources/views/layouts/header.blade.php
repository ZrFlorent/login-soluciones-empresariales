<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('titulo')</title>
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

    <link href="{{ asset('asse/assets/css/style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/estiloproductos.css') }}" rel="stylesheet">


    @yield('css-extra')



</head>

<body>

    <!-- Menu -->
    <div id="app">

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top header-inner-pages">
            <div class="container-fluid d-flex align-items-center justify-content-between">

                <h1 class="logo"><a href="index.html">ATIR SHOP</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('Nuestros-productos.index') }}">Productos</a></li>
                        <li><a href="{{ route('Blog.menu') }}">Blog</a></li>
                        <li><a href="{{ route('cart.index') }}">
                                Carrito
                                <i class="fas fa-shopping-cart"></i>
                                <span class="badge badge-warning navbar-badge"></span>

                                @if (Cart::instance('default')->count() > 0)
                                    <span
                                        class="badge badge-warning navbar-badge">{{ Cart::instance('default')->count() }}</span>

                                @endif
                            </a>


                        </li>

                    </ul>
                </nav><!-- .nav-menu -->

                <a href="#about" class="get-started-btn scrollto">A T I R</a>

            </div>
        </header><!-- End Header -->

        @yield('contenido')


    </div>
    @yield('js-extra')


    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <link href="{{ asset('css/fontawesome/js/all.js') }}" rel="stylesheet">

    <script src="{{ asset('asse/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('asse/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('asse/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('asse/assets/js/main.js') }}"></script>

    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}"></script>

</body>

</html>
