<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Hola Admistradora Rita,</h2>
Este es un mensaje de servicio ATIR : {{ $name }}
<br>
Detalles :<br>
<b>Nombre:</b> {{ $name }} <br>
<b>Correo:</b> {{ $email }}<br>
<b>Numero telefonico:</b> {{ $phone_number }} <br>
<b>Razon:</b> {{ $subject }} <br>
<b>Mensaje:</b> {{ $user_message }} <br>
<p href="{{ $email }}">Responder a : {{ $email }} </p> <br>

</body>
</html>