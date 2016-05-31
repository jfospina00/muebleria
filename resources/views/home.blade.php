@extends('app')

@section('content')

<div class="container">
	@if (Auth::user()->role == 1)
	<nav id="menu-admin" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav text-center">
					<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('order') }}">Pedidos</a></li>
					<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('user') }}">Clientes</a></li>
					<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('product') }}">Productos</a></li>
					<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('offer') }}">Ofertas</a></li>
					<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('position') }}">Anuncios</a></li>
				</ul>
			</div>
		</div>
	</nav>
	@endif
	<div class="row">
		<div class="col-md-12">
		@if (Auth::user()->role == 2)
			<?php $count = Session::get('count_field')?>
			@if (!$count == 0)
				<div class="alert alert-danger">
					<h5 class="text-center">
						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>	
						<span class="sr-only"></span>
						Atención!! Tienes <strong>{{ $count }}</> campos sin registrar en tu perfil
						<strong>Recuerda que para poder realizar un pedido, debes completar toda la información del perfil.</strong>
						<a href="{{ url('user/'.Auth::user()->id.'/modify') }}" class="alert-link">Modificar Perfil</a>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</h5>
				</div>
			@endif
			<h2 class="text-center">¡Nuestros Productos!</h2>
			<p class="text-center">Los mas hermosos muebles los puedes encontrar aquí, nosotros somos los encargados de hacerte llegar el prodcuto sin costo de envio</p>
			<div id="product-home" class="col-md-12 col-md-offset- text-center">
				@foreach ($produs as $product)
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="text-center"">
							{{ $product->description_product }}
						</div>
						<h5 style="">{{ $product->category->name_category }}</h5>
					</div>
				@endforeach
			</div>
		</div>	
		@endif
	</div>
</div>
@endsection