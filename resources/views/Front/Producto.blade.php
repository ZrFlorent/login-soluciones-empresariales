@extends('layouts.header')
@section('titulo', 'Tienda ATIR')
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nouislider.min.css') }}" rel="stylesheet">

@section('contenido')
    <main id="main">




        <!-- Page Content -->
        <section class="producto-section">

            <!-- SECTION -->
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- Product main img -->
                        <div class="col-md-7 col-md-push-2">
                            <div id="product-main-img">
                                @if ($producto->images->count() <= 0)
                                @else
                                    <div class="product-preview">
                                        <img class="img-slider mx-auto" src="{{ $producto->images->random()->url }}" alt="">
                                    </div>
                                @endif

                            </div>
                        </div>
                        <!-- /Product main img -->


                        <!-- Product details -->
                        <div class="col-md-5">
                            <div class="product-details">
                                <h2 class="product-name">{{ $producto->nombre }}</h2>
                                <div>
                                    <p class="pro">Categoria: {{ $producto->category->nombre }}</p>
                                    <a class="review-link" href="#"></a>
                                </div>
                                <div>
                                    <h3 class="product-price">${{ $producto->precio_actual }}<del
                                            class="product-old-price">${{ $producto->precio_anterior }}</del></h3>
                                    <span class="product-available">En Stock</span>
                                </div>
                                <p>{!! $producto->descripcion_corta !!}</p>


                                <div class="add-to-cart">

                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $producto->id }}">
                                        <input type="hidden" name="nombre" value="{{ $producto->nombre }}">
                                        <input type="hidden" name="precio_actual" value="{{ $producto->precio_actual }}">

                                        <button type="submit" class="add-to-cart-btn btn-blanco ripple btn-primary"><i
                                                class="fa fa-shopping-cart"></i>
                                            Agregar al Carrito</button>

                                    </form>
                                </div>





                            </div>
                        </div>
                        <!-- /Product details -->


                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /SECTION -->
        </section>

        @include('partials.Mas_productos')

    </main><!-- End #main -->



@endsection
