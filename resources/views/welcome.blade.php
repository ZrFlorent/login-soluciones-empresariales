<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--<link href="../public/css/login.css" rel="stylesheet">-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}"><link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style-1.css') }}">

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
        
   {{--      <div class="sidenav">
         <div class="login-main-text">
         <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                
               
            </div>
         </div>
        </div>
       --}}
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

                
            </div>
              <!--++++++++baner producto skin++++++++++-->

        <div id="bg-skin">

            

            <section class="container">

                <article class="row">

                    <div class="col-sm-4 col-md-3 col-md-offset-1">

                        <p class="p-50 txt-blanco p-50 lh40 thin text-uppercase">Gia<br><strong>Skin</strong></p>

                        <p class="p-50 txt-blanco p-50 lh40 thin text-uppercase" thin=""><strong>ideal</strong><br>para la<br><strong>nutrición</strong><br>de tu<br>piel</p>

                        <a href="https://gialv.com/mx/productos.php" class="btn-blanco ripple">Me interesa</a>

                    </div>

                    <div class="col-sm-offset-2 col-sm-5 col-md-offset-4 col-md-4">

                        <div class="trj01 pos-rel entrada-up">

                            <figure class="">

                                <img src="{{ asset('img/vaso-gia-skin.png') }}" class="img-responsive center-block">

                            </figure>

                            <div class="desc-trj01 pos-rel">

                                <div class="display-block over-f">

                                    <div class="display-inline-b  float-l">

                                        <p class="p-14 normal txt-azul mr0">GIA SKIN</p>

                                        <span class="txt-verde p-14">Suplementos alimenticios</span>

                                    </div>

                                </div>

                                <div class="display-block d">

                                    <p class="txt-gris1 p-14">

                                        El colágeno es una de las proteínas más abundantes y 

                                        esenciales para mantener en buen estado en diversos órganos del cuerpo y la piel.</p>

                                </div>

                                <a class="btn-plus ripple" href="https://gialv.com/mx/resultados.php?Linea=Suplementos%20alimenticios&amp;Sku=&amp;Descripcion=">

                                    <span></span>

                                    <span></span>

                                </a>

                            </div>

                        </div>

                    </div>

                </article>

            </section>

        </div>

 
        </div>
        
        
         </body>

         <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
         <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
</html>
