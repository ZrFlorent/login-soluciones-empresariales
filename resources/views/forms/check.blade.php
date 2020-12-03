@extends('Layouts.header')
@section('titulo', 'Tienda ATIR')

@section('css-extra')

    <script src="https://js.stripe.com/v3/"></script>
@endsection
@section('contenido')

    <div class="container">
        <div class="py-5 text-center" style="padding-top: 100px">
            <h2>Checkout</h2>
            <p class="lead">Por favor, rellena los campos requeridos para finalizar la compra</p>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Tu carrito</span>
                    <span class="badge badge-secondary badge-pill">{{ Cart::count() }}</span>
                </h4>
                <ul class="list-group mb-3">

                    @foreach (Cart::content() as $carrito)


                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ $carrito->model->nombre }}</h6>
                                <small class="text-muted">{!! $carrito->model->descripcion_corta !!}</small>
                            </div>
                            <span class="text-muted">${{ $carrito->model->precio_actual }}</span>
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (MXN)</span>
                        <strong>${{ Cart::total() }} </strong>
                    </li>
                </ul>


            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Dirección de Envio
                </h4>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form action="{{ route('checkout.store') }}" method="POST" class="needs-validation" novalidate>
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6 mb-3"> <label for="nombre">Nombre</label>

                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="nombre" id="nombre" class="form-control"
                                    placeholder="Ingrese su nombre..." value="{{ old('nombre') }}">
                            </div>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3"> <label for="apellido">Apellidos</label>

                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="apellido" id="apellido" class="form-control"
                                    placeholder="Ingrese su apellido..." value="{{ old('apellido') }}">
                            </div>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3"> <label for="Telefono">Telefono</label>

                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                                </div>
                                <input type="tel" name="telefono" id="telefono" class="form-control"
                                    placeholder="Ingrese su número de telefono" maxlength="10" minlength="9"
                                    value="{{ old('telefono') }}">
                            </div>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="address2">Corréo electrónico <span class="text-muted"></span></label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-comment"></i></span>
                                </div>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Ingrese su email..." value="{{ old('email') }}">

                            </div>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="address2">Dirección 1 <span class="text-muted"></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-comment"></i></span>
                            </div>

                            <input type="text" name="direccion" id="direccion" class="form-control"
                                placeholder="Ingrese su direccion" value="{{ old('direccion') }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address2">Dirección 2 <span class="text-muted"></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-comment"></i></span>
                            </div>

                            <input type="text" name="direccion2" id="direccion2" class="form-control"
                                placeholder="Ingrese su direccion 2" value="{{ old('direccion2') }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Pais</label>
                            <div class="input-group">


                                <select class="custom-select d-block w-100" id="country" required>
                                    {{-- <option value="">Seleccionar...</option>
                                    --}} <option>México</option>
                                </select>
                            </div>

                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">Estado</label>
                            <div class="input-group">


                                <select class="custom-select d-block w-100" id="state" required>
                                    {{-- <option value="">Seleccióne...</option>
                                    --}} <option>Querétaro</option>
                                </select>
                            </div>

                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Código postal</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-comment"></i></span>
                                </div>
                                <input type="tel" name="cp" id="cp" class="form-control"
                                    placeholder="Ingrese su código postal " maxlength="10" minlength="9"
                                    value="{{ old('cp') }}">

                            </div>
                            <div class="invalid-feedback">
                                Código Postal requerido.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3"> <label for="address2">Comentarios<span class="text-muted"></span></label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <textarea name="mensaje" id="mensaje" name="mensaje" class="form-control" rows="3"
                                value="{{ old('mensaje') }}"></textarea>
                        </div>
                        {{-- <label for="address">Dirección</label>
                        <input type="text" class="form-control" id="address" placeholder="Calle 1, No. 234" required>
                        --}}<div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>



                    <hr class="mb-4">

                    <h4 class="mb-3">Pago</h4>

                    <div class="form-group">

                        <label for="card-element">
                            Tarjeta de credito o debito
                        </label>
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>

                    </div>
                    <input type="hidden" name="cardnumber1" id="cardnumber1" class="form-control" maxlength="12"
                        minlength="11" value="4001 4802 1345 1425">
                    <input type="hidden" name="fe" id="fe" class="form-control" maxlength="12" minlength="11" value="02/23">
                    <input type="hidden" name="fe1" id="fe1" class="form-control" maxlength="12" minlength="11" value="986">

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pagar</button>
                </form>
            </div>
        </div>

    </div>
@endsection
@section('js-extra')

    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {
            style: style
        });

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }

    </script>

@endsection
