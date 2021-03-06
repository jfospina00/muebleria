<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Muebleria Prins</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">	

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				@if (Auth::check())
					<a class="navbar-brand">{{Auth::user()->name}}</a>
				@else
					<a class="navbar-brand">Muebleria Prins</a>
				@endif
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Inicio</a></li>
					@if (Auth::check())
						@if (Auth::user()->role == 0 ||
							 Auth::user()->role == 2)
							{{-- role 2 client --}}
							<li><a href="{{ url('offer') }}">Ofertas</a></li>
							<li><a href="{{ url('product') }}">Productos</a></li>
							<?php 
								$count = Session::get('count_field')
							?>
							@if ($count == 0)
								<li><a href="{{ url('order') }}" class="">Mis Pedidos</a></li>
							@else
								<li>
									<a id="link-morders">
										Mis Pedidos <span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>
									</a>
								</li>
							@endif
						@else
							{{-- role 1 admin--}}
							<li><a href="{{ url('user') }}">Cliente</a></li>
							<li><a href="{{ url('administration') }}">Administrador</a></li>
						@endif
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Ingresar</a></li>
						<li><a href="{{ url('/auth/register') }}">Registrar</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Opciones<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('user/'.Auth::user()->id.'/modify') }}">Cambiar perfil</a></li>
								<li><a href="{{ url('/auth/logout') }}">Salir</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	@yield('content')
	<footer class="footer background1 color1">
		<div class="container text-center">
			<div class="col-md-12 text-center">
				<div class="col-md-4"></div>
				<div class="col-md-4 text-center">
					<div class="logo-footer"></div>
				</div>	
				<div class="col-md-4"></div>
			</div>
			<!-- <h4>Muebleria Prins</h4> -->
			<p> &copyTodos los Derechos Reservados Manizales - Colombia {{ date("Y")}}</p>
		</div>
	</footer>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<!-- <script src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script> -->
	<script src="{{ asset('/js/scripts.js') }}"></script>
</body>
</html>
