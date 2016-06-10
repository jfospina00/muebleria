<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Muebleria Prins</title>
	<link href="{{ asset('/css/app.css') }}"     rel="stylesheet">
	<link href="{{ asset('/css/style.css') }}"   rel="stylesheet">
	<link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="img-ppal" class="col-md-12">
		<nav id="navbar-w" class="navbar navbar-default ">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<li><a href="{{ url('/auth/login') }}">Ingresar</a></li>
							<li><a href="{{ url('/auth/register') }}">Registrar</a></li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
								</ul>
							</li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
		<h1 id="ms" class="text-center color1">Muebleria Prins</h1>
		{{--========================================== Sub-Menu ==========================================--}}
		<div class="ol-xs-12 col-sm-12 col-md-12 col-lg-12">
			<nav id="navbar-w" class="navbar navbar-default ">
				<div class="container-fluid">
					<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 " id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="op-menu color1"><a class="color1">Ofertas</a></li>
							<li class="op-menu color1"><a class="color1">Productos</a></li>
							<li class="op-menu color1"><a class="color1">Resdes Sociales</a></li>
							<li class="op-menu color1"><a class="color1">Contacténos</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	{{--=========================================== Content ===========================================--}}
	{{-- Section Products --}}
	<div class="col-md-12">
		<h1 class="text-center">¡Nuestros Productos!</h1>
		<p class="text-center">Los mas hermosos muebles los puedes encontrar aquí, nosotros somos los encargados de hacerte llegar el prodcuto sin costo de envio</p>
		<div id="product-home" class="col-md-12 text-center">
			@foreach ($produs as $product)
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="text-center"">
						{{ $product->description_product }}
					</div>
					<h5 style="">{{ $product->category->name_category }}</h5>
				</div>
			@endforeach
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<a class="btn btn-primary col-xs-12 col-sm-4 col-md-2 col-lg-2 col-sm-offset-4 col-md-offset-5 col-lg-offset-5" href="{{ url('product') }}">Ver Más Productos</a>
			</div>
		</div>
	{{-- Section Offers --}}
		<h1 class="text-center">¡Ofertas!</h1>
		<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda praesentium et quisquam necessitatibus fugiat temporibus eveniet consectetur nihil quam porro blanditiis cum id labore quo aliquid, eos nisi! Nihil, odit.</p>
		<div id="product-home" class="col-md-12 col-md-offset- text-center">
		<!-- <div id="offer-home" class="col-md-12 col-md-offset- text-center"> -->
			@foreach ($offers as $offer)
				@if (count($offers) >= 4)
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				@endif
				@if (count($offers) == 3)
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				@endif
				@if (count($offers) == 2)
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				@endif
				@if (count($offers) == 1)
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				@endif
					<div class="text-center"">
						{{ $offer->description_offer }}
					</div>
					<h5 style="">{{ $offer->name_offer }}</h5>
				</div>
			@endforeach
			<div class="col-md-12 text-center">
				<a class="btn btn-primary col-xs-12 col-sm-4 col-md-2 col-lg-2 col-sm-offset-4  col-md-offset-5 col-lg-offset-5" href="{{ url('offer') }}">Ver Más Ofertas</a>
			</div>
		</div>

	</div>
	<footer class="footer box-none mbgc-3 color-3 sfont-1 caviar">
		<div class="container text-center">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<div class="col-xs-4 col-sm-4 col-md-12 col-lg-12"></div>
				<div class="col-xs-4 col-sm-4 col-md-12 col-lg-12 text-center">
					<div class="logo-footer"></div>
				</div>	
				<div class="col-xs-4 col-sm-4 col-md-12 col-lg-12"></div>
			</div>
			<!-- <h4>Muebleria Prins</h4> -->
			<p class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> &copyTodos los Derechos Reservados Manizales - Colombia {{ date("Y")}}</p>
		</div>
	</footer>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/scripts.js') }}"></script>
</body>
</html>
