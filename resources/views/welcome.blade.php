<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Muebleria Prins</title>
	<link href="{{ asset('/css/app.css') }}"     rel="stylesheet">
	<link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style2.css') }}"   rel="stylesheet">
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
		<div class="col-md-12">
			<nav id="navbar-w" class="navbar navbar-default ">
				<div class="container-fluid">
					<div class="col-md-6 col-md-offset-3 text-center" id="bs-example-navbar-collapse-1">
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
	<div class="col-md-12">
		
	</div>
	<footer class="footer box-none mbgc-3 color-3 sfont-1 caviar">
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
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/scripts.js') }}"></script>
</body>
</html>