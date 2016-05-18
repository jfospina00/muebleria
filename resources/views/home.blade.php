@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
				<div class="panel-body">
					Bienvenido! <label for=""> {{Auth::user()->name}} </label><br>
					Ofertas {{ count($offers) }} <br>
					Productos {{ count($produs) }}<br>
					<a href="{{ url('order/create') }}">Realizar Pedido</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection