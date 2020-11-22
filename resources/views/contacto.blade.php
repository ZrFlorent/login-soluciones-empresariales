<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/login.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                display: flex;
   flex-direction: row;
   align-items: center;
   justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 22px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="sidenav">
         <div class="login-main-text">
         <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                
               
            </div>
         </div>
      </div>
      
      <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrate</a>
                        @endif
                    @endauth
                </div>
            @endif

            
<div class="main contenedor-login">
      <div class="titulo m-b-md">
                    Soluciónes empresariales S.A. de C.V.
                </div>
    <form method="post" action=''>
        @csrf
        <div class="container">
            @if(session('success'))
                <b>{{ session('success') }}</b>
            @endif
            <label>Nombre</label>
            <p><input type="name" name="nombre" class="form-control" /></p>
            <label>Correo eletrónico</label>
            <p><input type="email" name="correo" class="form-control" /></p>
            <label>Motivo</label>
            <p><input type="text" name="subject" class="form-control" /></p>
            <label>Mensaje</label>
            <p> <textarea name="content" class="form-control" rows="7"></textarea></p>
            <button type="submit" class="btn btn-primary float-right">Enviar</button>

        </div>
    </form>
      </div>
                
        </div>
        
    
    </body>
</html>

