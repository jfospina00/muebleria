@extends('app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3"><h3>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h3></div>
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3"><h3>Pedidos Pendientes: <strong>{{ count($order)}}</strong></h3></div>
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3"><h3>Pedidos Recibidos: <strong>{{ count($orderR)}}</strong></h3></div>
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3"><h3>Total Pedidos: <strong>{{ count($order) + count($orderR)}}</strong></h3></div>
				<table class="table">
					<thead>
						<tr>
							<th class="text-center">Fecha del Pedido</th>
							<th class="text-center">Fecha de Entrega</th>
							<th class="text-center">Producto</th>
							<th class="text-center">Cantidad</th>
							<th class="text-center">Total</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($order as $order)
							<tr>
								<td class="text-center">{{ $order->created_at }}</td>
								<td class="text-center">Fecha entrega Pendiente</td>
								<td class="text-center">{{ $order->product_id }}</td>
								<td class="text-center">Cantidad Pendiente</td>
								<td class="text-center">${{ $order->total_priece }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>	
		</div>
	</div>
@endsection