@extends('layouts.layout-app')
@section('titulo','Tienda ATIR')
@section('estilos')
<link rel="stylesheet" type="text/css" href="{{ asset('asset/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/styles/responsive.css') }}">
<link type="text/css" href="{{ asset('css/estiloproductos.css') }}" rel="stylesheet">

@endsection
@section('contenido')

<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->
		<div class="home">
			<!-- Home Slider -->
			<div class="home_slider_container">

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						@foreach ($principal as $slider)
							
						<li data-target="#carouselExampleIndicators"
					data-slide-to="{{ $loop->index }}" class="{{ $loop -> first ? 'active' :''}}"></li>
							@endforeach

					</ol>
					<div class="carousel-inner">
							
						@foreach ($principal as $slider)							
						
						<div class="carousel-item {{ $loop ->first ? 'active' : '' }}">
							<div class="background_image" style="background-image:url(asset/images/fondo3.png)"></div>

							<div class="container home-container">
								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="container fill_height">
											<div class="row fill_height">
												<div class="col fill_height">
													<div
														class="home_container d-flex flex-column align-items-center justify-content-start">
														<div class="home_content">

															<div class="home_items">
																<div class="row">
																	<div class="col-sm-3 offset-lg-1">
																	</div>
																	<div
																		class="col-lg-8 col-md-12 col-sm-8 offset-sm-2 offset-md-0">
																		<div class="product home_item_large">
																			<div
																				class="product_tag d-flex flex-column align-items-center justify-content-center">
																				<div>
																					<div>A</div>
																					<div>{{$slider -> precio_actual }}
																					</div>
																					<del
																						class="price-oldslider">{{$slider -> precio_anterior }}</del>
																				</div>
																			</div>
																			<div class="product_image"><img class="img-slider"
																					src="{{ $slider->images->random()->url}}" alt="">
																			</div>
																			<div class="product_content">
																				<div class="product_buttons">
																					<div
																						class="text-right d-flex flex-row align-items-start justify-content-start">
																						<div
																							class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																							<div>
																								<div><img src="asset/images/cart_2.svg" alt="">
																									<div>+</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="tituloproducto">
											<div class="hero-caption left hidden-xs hidden-sm">
												<span class="year">{{$slider-> estado }}</span>
												<span class="caption">{{$slider-> nombre }}</span>
												<div class="btn-group">
													<a href="#about" class="btn-get-started scrollto">Mas informacion</a>
												</div>
												{!! $slider->descripcion_corta !!}
												
											</div>
										</div>
										
									</div>
								</div>
							</div>

						</div>
						@endforeach
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
						data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
						data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>


			</div>
		</div>















	<section class="about-section" id="presentaciones">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="rec-ali">
								<div class="shop">
									<div class="shop-img categoria-conte-naranja">
									<img class="img-fluid"  src="{{ asset('img/limpi.png') }}" alt="Card image cap">
									</div>
									<div class="shop-body">
										<h3>Accessories<br>Collection  <i class="fa fa-arrow-circle-right"></i></h3>
											<a href="resultados.php?Linea=Cuidado personal&amp;Sku=&amp;Descripcion=" class="btn-blanco ripple">Ver productos</a>
										</div> 
								</div>
					</div>                
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
						<div class="shop">
									<div class="shop-img categoria-conte-azul">
									<img class=""  src="{{ asset('img/catcremas.png') }}" alt="Card image cap">
									</div>
									<div class="shop-body">
										<h3>Accessories<br>Collection  <i class="fa fa-arrow-circle-right"></i></h3>
											<a href="resultados.php?Linea=Cuidado personal&amp;Sku=&amp;Descripcion=" class="btn-blanco ripple">Ver productos</a>
										</div> 
								</div>
					</div>
		
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="rec-ali">
								<div class="shop">
									<div class="shop-img categoria-conte-morado">
									<img class="img-fluid"  src="{{ asset('img/alimentos.png') }}" alt="Card image cap">
									</div>
								 <div class="shop-body">
									<h3>Accessories<br>Collection  <i class="fa fa-arrow-circle-right"></i></h3>
										<a href="resultados.php?Linea=Cuidado personal&amp;Sku=&amp;Descripcion=" class="btn-blanco ripple">Ver productos</a>
									</div> 
								</div>
					</div>                
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
						<div class="shop">
									<div class="shop-img categoria-conte-verde">
										
									<img class=""  src="{{ asset('img/catnt.png') }}" alt="Card image cap">
									
									</div>
									<div class="shop-body">
										<h3>Accessories<br>Collection  <i class="fa fa-arrow-circle-right"></i></h3>
											<a href="resultados.php?Linea=Cuidado personal&amp;Sku=&amp;Descripcion=" class="btn-blanco ripple">Ver productos</a>
										</div> 
									
								</div>
					</div>
		
				</div>
			</div>
			
		
		</section>
	


		

		<div class="products-section" id="productos">
			<div class="container">
				
				<div class="row">
		             <div class="owl-carousel" id="product-carousel"> 
						@foreach ($prod as $producto)
							<div class="card-car pos-rel margen-producto">
								@if ($producto->images->count()<=0)
									<figure class="">
										<div class="img-producto-trj">
											<img src="{{ asset('/img/avatar2.png') }}" class="rounded-circle">
										</div>
									</figure>
									@else
									<figure class="">
										<div class="img-producto-trj">
											<img src="{{ $producto->images->random()->url}}" class="center-block mx-auto">
										</div>
									</figure>
								@endif
							
							<div class="desc-trj01 pos-rel" style="height: 200px">
								<div class="display-block over-f">
									<div class="display-inline-b  float-l"><!-- w5 0-->
									<div class="product-body">
										<p class="product-category">{{ $producto -> categoria }} 
										</p>
										<h3 class="product-name"><a href="#">{{ $producto -> nombre}}</a></h3>
										<h4 class="product-price">{{$producto -> precio_actual }}
										<del class="product-old-price">{{ $producto -> precio_anterior}}</del></h4>
										<a href="resultados.php?Linea=Cuidado personal&amp;Sku=&amp;Descripcion=" class="btn-blanco ripple">Ver productos</a>
									</div>
									</div>
								</div>       
							</div>        
							</div>						
						@endforeach
					</div> 

				</div>
			</div>
		</div>


		


</div>		




		
@endsection
