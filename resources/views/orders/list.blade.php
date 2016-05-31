@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{{-- =========================================== Role 2 =========================================== --}}
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			@if (Auth::user()->role == 2)
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3"><label>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</label></div>
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3"><label>Pedidos Pendientes: <strong>{{ count($order)}}</strong></label></div>
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3"><label>Pedidos Recibidos: <strong>{{ count($orderR)}}</strong></label></div>
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3"><label>Total Pedidos: <strong>{{ count($order) + count($orderR)}}</strong></label></div>
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
			@endif
		{{-- =========================================== Role 1 =========================================== --}}
			@if (Auth::user()->role == 1)
				<div class="col-md-3">
					<label>Total de Pedidos: <strong>{{ count($orders)}}</strong></label>
				</div>
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
						@foreach ($orders as $order)
							<tr>
								<td class="text-center">{{ substr($order->created_at, 0,11)  }}</td>
								<td class="text-center">Fecha entrega Pendiente</td>
								<td class="text-center">{{ $order->product_id }}</td>
								<td class="text-center">Cantidad Pendiente</td>
								<td class="text-center">${{ $order->total_priece }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@endif
			</div>	
		</div>
	</div>
@endsection