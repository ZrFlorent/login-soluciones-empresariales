<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>@yield('titulo')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Jhonatan Shop template">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" contentS="{{ csrf_token() }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/all.css') }}" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">


@yield('estilos')


</head>
<body>

<!-- Menu -->
<div id="app">
	<div class="menu">

		<!-- Search -->
		<div class="menu_search">
			<form action="#" id="menu_search_form" class="menu_search_form">
				<input type="text" class="search_input" placeholder="Buscar" required="required">
				<button class="menu_search_button"><img src="asset/images/search.png" alt=""></button>
			</form>
		</div>
		<!-- Navigation -->
		<div class="menu_nav">
			<ul>
				<li><a href="#">Women</a></li>
				<li><a href="#">Men</a></li>
				<li><a href="#">Kids</a></li>
				
			</ul>
		</div>
		<!-- Contact Info -->
		<div class="menu_contact">
			<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
				<div><div><img src="asset/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
				<div>+1 912-252-7350</div>
			</div>
			<div class="menu_social">
				<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="super_container">

		<!-- Header -->

		<header class="header">
			<div class="header_overlay"></div>
			<div class="header_content d-flex flex-row align-items-center justify-content-start">
				<div class="logo">
					<a href="#">
						<div class="d-flex flex-row align-items-center justify-content-start">
							<div><img src="asset/images/logo_1.png" alt=""></div>
							<div>ATIR Shop</div>
						</div>
					</a>	
				</div>
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="#">Productos</a></li>
						<li><a href="#">Contactos</a></li>
						<li><a href="#">Blog</a></li>					
					</ul>
				</nav>
				<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
					<!-- Search -->
					<div class="header_search">
						<form action="#" id="header_search_form">
							<input type="text" class="search_input" placeholder="Buscar" required="required">
							<button class="header_search_button"><img src="asset/images/search.png" alt=""></button>
						</form>
					</div>
					
					<!-- Cart -->
					<div class="cart"><a href="cart.html"><div><img class="svg" src="asset/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
					<!-- Phone -->
					<div class="header_phone d-flex flex-row align-items-center justify-content-start">
						<div><div><img src="asset/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
						<div>+1 912-252-7350</div>
					</div>
				</div>
			</div>
		</header>


		@yield('contenido')
	
	</div>
		
</div>
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
<script src="{{ asset('js/carouselproductos.js') }}"></script>

</body>

</html>