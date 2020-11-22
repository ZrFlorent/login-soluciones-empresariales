a<div class="might-like-section">
    <div class="container">
        <h2>Productos relacionados...</h2>

        <div class="row">
            @foreach ($relacion as $producto)
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 margen pad-top">
                    <div class="card h-100 card-car">
                        @if ($producto->images->count() <= 0)

                            <div class="product_image ">
                                <a href="#"><img class="img-slider" src="http://placehold.it/700x400" alt=""></a>
                            </div>

                        @else
                            <div class="product_image">
                                <a href="{{ route('Nuestros-productos.show', $producto->slug) }}"><img
                                        class="img-slider mx-auto" src="{{ $producto->images->random()->url }}"
                                        alt=""></a>
                            </div>
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">
                                <a
                                    href="{{ route('Nuestros-productos.show', $producto->slug) }}">{{ $producto->nombre }}</a>
                            </h4>
                            <h5>${{ $producto->precio_actual }}</h5>

                        </div>
                        <div class="c-footer mx-auto">

                            <a href=" {{ route('Nuestros-productos.show', $producto->slug) }}"
                                class="add-to-cart-btn btn-blanco ripple btn-primary" style="padding-top: 5px;">Ver
                                productos</a>

                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
