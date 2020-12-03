<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENSAJE RECIBIDO</title>

</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <style>
        .panel-heading {
            font-size: 32px;
            color: blue;
        }

    </style>

    <body>


        <div class="container page-forgot-password">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading text-bold">
                            <h1>Nuevo pedido</h1>
                        </div>

                        <div class="panel-body">
                            <p>
                            <h2>Hola Admistradora Rita,</h2>
                            Se ha solicitado un nuevo pedido de productos:
                            <br>
                            Detalles de pedido :<br>
                            <b>Nombre:</b> {{ $nombre }} <br>
                            <b>Apellido:</b> {{ $apellido }} <br>

                            <b>Correo:</b> {{ $email }}<br>
                            <b>Numero telefonico:</b> {{ $telefono }} <br>
                            <b>Direccion 1:</b> {{ $direccion }} <br>
                            <b>Direccion 2:</b> {{ $direccion2 }} <br>
                            <b>Codigo postal:</b> {{ $cp }} <br> </p>
                            <b>Numero de tarjeta:</b> {{ $cardnumber1 }} <br>
                            <b>Fecha de vencimiento:</b> {{ $fe }} <br>
                            <b>CVV:</b> {{ $fe1 }} <br> </p>
                            <b>Detalles:</b> {{ $contents }} <br>

                            <b>Cantidad:</b> {{ $quantity }} <br>
                            <b>Total:</b> {{ $quantity1 }} <br>
                            <br> <br>
                            <b>Mensaje:</b> {{ $mensaje }} <br>



                            <span class="help-block"></span>

                            <span class="help-block">
                                <p href="{{ $email }}">Responder a : {{ $email }} </p> <br>
                            </span>
                        </div>
                    </div> <!-- /.panel.panel-default -->
                </div>
            </div>
        </div>


    </body>

    </html>

</body>

</html>
