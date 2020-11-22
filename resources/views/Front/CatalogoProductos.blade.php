@extends('layouts.header')
@section('titulo', 'Tienda ATIR')

@section('contenido')
    <main id="main">




        <!-- Page Content -->
        <section class="inner-page">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4">

                        <h1 class="my-4">Shop Name</h1>

                        @foreach ($categories as $category)

                            <div class="bs-example">
                                <div class="list-group">
                                    <a href="{{ route('Nuestros-productos.index', ['category' => $category->slug]) }}"
                                        class="list-group-item list-group-item-action">
                                        <i class="{{ $category->descripcion }}"></i>{{ $category->nombre }}
                                    </a>

                                </div>
                            </div>




                        @endforeach



                    </div>
                    <!-- /.col-lg-3 -->

                    <div class="col-lg-8">


                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 16px">
                                <h4 class="my-4">
                                    {{ $categoriaNombre }}
                                </h4>
                            </div>
                            @foreach ($productos as $producto)
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 margen ">
                                    <div class="card h-100 card-car">
                                        @if ($producto->images->count() <= 0)

                                            <div class="product_image ">
                                                <a href="#"><img class="img-slider" src="http://placehold.it/700x400"
                                                        alt=""></a>
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
                                            <p class="card-text">{!! $producto->descripcion_corta !!}</p>
                                        </div>
                                        <div class="c-footer mx-auto">

                                            <a href=" {{ route('Nuestros-productos.show', $producto->slug) }}"
                                                class="add-to-cart-btn btn-blanco ripple btn-primary">Ver
                                                productos</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.col-lg-9 -->

                </div>
                <!-- /.row -->

            </div>
        </section>

        <!-- /.container -->

    </main><!-- End #main -->



@endsection
