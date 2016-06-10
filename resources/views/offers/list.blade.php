@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{{-- ========================================= Role 1 ========================================= --}}
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
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<button id="show-form" class="btn btn-success">Nueva Oferta</button>
				</div>
				<form id="form" class="transition" action="{{ url('offer') }}" method="post" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
					<h3 class="text-center">Nueva Oferta</h3>

					<div class="col-md-12">
						<div class="form-group ">
							<label class="col-md-1 control-label">Oferta</label>
							<div class="col-md-3">
								<input type="text" class="form-control" name="name_offer" placeholder="Ejemplo: 2x1">
							</div>
							<label class="col-md-1 control-label">Tipo de Oferta</label>
							<div class="col-md-3">
								<select name="name_real_offer" class="form-control">
									<option value="1">Promoción</option>
									<option value="2">Descuento</option>
								</select>
							</div>
							<label class="col-md-1 control-label">Descuento</label>
							<div class="col-md-3">
								<input type="number" class="form-control" name="discount" placeholder="Ejemplo:10">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group ">
							<label class="col-md-1 control-label">Descripción</label>
							<div class="col-md-3">
								<textarea name="description_offer" class="form-control"" placeholder="Ejemplo:Lleve dos pague uno"></textarea>
							</div>
							<label class="col-md-1 control-label">Fecha Inicio de Oferta</label>
							<div class="col-md-3">
								<input type="date" class="form-control" name="start_date" placeholder="Ejemplo: 2x1">
							</div>
							<label class="col-md-1 control-label">Fecha Fin de Oferta</label>
							<div class="col-md-3">
								<input type="date" class="form-control" name="finish_date" placeholder="Ejemplo: 2x1">
							</div>
						</div>
					</div>
					<br>
					<br>
					<br>
					<br>
					<div class="col-md-6 col-md-offset-3">
						<button class="btn btn-success col-md-12" type="input">Agregar</button>
					</div>
					<div class="col-md-12">
						<hr>
					</div>
				</form>
				<table class="table">
					<thead>
						<tr>
							<th class="text-center">Oferta</th>
							<th class="text-center">Tipo Oferta</th>
							<th class="text-center">Descripción</th>
							<th class="text-center">Descuento</th>
							<th class="text-center">Fecha Inicio Descuento</th>
							<th class="text-center">Fecha Fin Descuento</th>
							<th class="text-center">Estado</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($offers as $offer)
							<tr>
								<td class="text-center">{{ $offer->name_offer }}</td>
								<td class="text-center">@if ($offer->name_real_offer == 1) Promoción @else Descuento @endif</td>
								<td class="text-center">{{ $offer->description_offer }}</td>
								<td class="text-center">{{ $offer->discount }}%</td>
								<td class="text-center">{{ substr($offer->start_date,0,11 ) }}</td>
								<td class="text-center">{{ substr($offer->finish_date,0,11 ) }}</td>
								<td class="text-center">{{ $offer->state_id }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@endif
		{{-- ========================================= Role 2 ========================================= --}}
		@if (Auth::user()->role == 2)
			@extends('modals')
			<h2 class="text-center">Nuestras Ofertas</h2>
			<p class="text-center">Nuestras Ofertas Tienen Fecha de Vigencia, Aprovechalas!</p>
			<div id="product-home" class="col-md-12 col-md-offset- text-center">
			<!-- <div id="offer-home" class="col-md-12 col-md-offset- text-center"> -->
				<input type="hidden" route="route" value="{{ url('/offer/show') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token1">
				@foreach ($offers as $offer)
					@if (count($offers) >= 4)
						<div id="{{ $offer->id }}" class="col-xs-12 col-sm-6 col-md-3 col-lg-3 showOffer">
					@endif
					@if (count($offers) == 3)
						<div id="{{ $offer->id }}" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 showOffer">
					@endif
					@if (count($offers) == 2)
						<div id="{{ $offer->id }}" class="col-xs-12 col-sm-6 col-md-6 col-lg-6 showOffer">
					@endif
					@if (count($offers) == 1)
						<div id="{{ $offer->id }}" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 showOffer">
					@endif
						<div class="text-center"">
							{{ $offer->description_offer }}
						</div>
						<h5 style="">{{ $offer->name_offer }}</h5>
					</div>
				@endforeach
				@if (count($offers) <= 1 )
					<h2 class="text-center">Lo Sentimos</h2>
					<p class="text-center">Por el momento no tenemos ofertas</p>
				@endif
			</div>
		@endif
		</div>
	</div>
@endsection