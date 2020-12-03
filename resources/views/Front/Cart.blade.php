@extends('layouts.header')
@section('titulo', 'Tienda ATIR')
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nouislider.min.css') }}" rel="stylesheet">

@section('contenido')

    <main id="main">

        <section class="cart-section">





            <div class="container ">
                <!--Section: Block Content-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 home_title">
                        <h3 class="mx-auto">Tu Orden</h3>
                    </div>

                    <!--Grid column-->
                    <div class="col-lg-8">

                        <!-- Card -->
                        <div class="mb-3">
                            <div class="pt-4 wish-list">


                                @if (session()->has('success_message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success_message') }}
                                    </div>
                                @endif

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (Cart::count() > 0)
                                    <h5 class="mb-4">{{ Cart::count() }} productos en el Carrito</h5>
                                    @foreach (Cart::content() as $item)


                                        <div class="row mb-4">

                                            <div class="col-xl-1">
                                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                                    <img class="img-fluid w-50" src="{{ asset('img/baner/baner.png') }}"
                                                        alt="Sample">
                                                    <a href="#!">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-md-7 col-lg-9 col-xl-9 shadow-sm mb-4 bg-white">
                                                <div class="cart-left">

                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h5><strong>{{ $item->model->nombre }}</strong></h5>
                                                            <p class="mb-2 text-muted text-uppercase small">Descripción:
                                                                {!! $item->model->descripcion_corta !!}
                                                            </p>
                                                            <p class="mb-3 text-muted text-uppercase small">Descuento:
                                                                {{ $item->model->descuento_porcentaje }}
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>

                                                            <form action="{{ route('cart.destroy', $item->rowId) }}"
                                                                method="POST">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}

                                                                <button type="submit" class="btn btn-cart">
                                                                    <i class="fa fa-trash"></i>
                                                                    Eliminar</button>
                                                            </form>

                                                        </div>
                                                        <p class="mb-0"><span><strong
                                                                    id="summary">${{ $item->model->precio_actual }}</strong></span>
                                                        </p class="mb-0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @else

                                    <h3>No hay productos en Carrito de compras!</h3>
                                    <div class="spacer"></div>
                                    <a href="{{ route('Nuestros-productos.index') }}" class="button">Continua
                                        comprando</a>
                                    <div class="spacer"></div>

                                @endif

                            </div>
                        </div>
                        <!-- Card -->



                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4">

                        <!-- Card -->
                        <div class="mb-3">
                            <div class="pt-4">

                                <h5 class="mb-3">Cantidad total:</h5>

                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        Importe temporal
                                        <span>${{ Cart::subtotal() }}</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        Impuesto
                                        <span>${{ Cart::tax() }}</span>
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                            <strong>Importe total
                                            </strong>

                                        </div>
                                        <span><strong>${{ Cart::total() }} <br>
                                            </strong></span>
                                    </li>
                                </ul>

                                <a href=" {{ route('checkout.index') }}"
                                    class="add-to-cart-btn btn-blanco ripple btn-primary"> Continuar</a>
                            </div>
                            <!-- Card -->


                        </div>
                        <!--Grid column-->

                    </div>
                    <!-- Grid row -->

                    <!--Section: Block Content-->

                </div> <!-- end cart-section -->



        </section>
        @include('partials.Mas_productos')

    </main><!-- End #main -->


@endsection
