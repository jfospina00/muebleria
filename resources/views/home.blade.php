@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<!-- <div class="panel panel-default">
				<div class="panel-heading">Home</div>
				<div class="panel-body">
					Bienvenido! <label for=""> {{Auth::user()->name}} </label><br>
					Ofertas {{ count($offers) }} <br>
					Productos {{ count($produs) }}<br>
					<a href="{{ url('order/create') }}">Realizar Pedido</a>
				</div>
			</div> -->
			<h2 class="text-center">!Nuestros Productos!</h2>
			<p class="text-center">Los mas hermosos muebles los puedes encontrar aquí, nosotros somos los encargados de hacerte llegar el prodcuto sin costo de envio</p>
			<!-- <div class="col-md-4 col-md-offset-4 text-center ">
				<ul class="list-unstyled list-inline">
					<li><a class="col-md-3">lorem1</a></li>
					<li><a class="col-md-3">lorem2</a></li>
					<li><a class="col-md-3">lorem3</a></li>
					<li><a class="col-md-3">lorem4</a></li>
				</ul>
			</div> -->
			<div class="col-md-12 col-md-offset- text-center">
				@foreach ($produs as $product)
					<div class="col-md-3 border">
						<div class="text-center " style="height: 200px;">
							{{ $product->description_product }}
						</div>
						<h5>{{ $product->category->category_name }}</h5>
					</div>
				@endforeach
			</div>
		</div>	
	</div>
</div>
@endsection