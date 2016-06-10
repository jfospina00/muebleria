@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				{{-- ==================================== Role 1 ================================ --}}
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
						<button id="show-form" class="btn btn-success">Nuevo Producto</button>
					</div>
					<form id="form" class="transition" action="{{ url('product') }}" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						<h3 class="text-center">Nuevo Producto</h3>

						<div class="form-group">
							<label class="col-md-2 control-label">Producto</label>
							<div class="col-md-4">
								<select name="category_id" id="" class="form-control" >
									@foreach ($categories as $category)
										<option value="{{ $category->id }}"><span>{{ $category->name_category }}</span></option>
									@endforeach
								</select>
							</div>
							<label class="col-md-2 control-label">Material</label>
							<div class="col-md-4">
								<input type="text" class="form-control" name="material">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Precio</label>
							<div class="col-md-4">
								<input type="number" class="form-control" name="price">
							</div>
							<label class="col-md-2 control-label">Oferta</label>
							<div class="col-md-4">
								<select name="offer_id" id="" class="form-control" >
									@foreach ($offers as $offer)
										<option value="{{ $offer->id }}">{{ $offer->name_offer }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							
							<label class="col-md-2 control-label">Descripcion Producto</label>
							<div class="col-md-10">
								<textarea name="description_product" id="" class="form-control"></textarea>
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
							<hr>
						</div>
					</form>
					<table class="table">
						<thead>
							<tr>
								<th class="text-center">Producto</th>
								<th class="text-center">Precio </th>
								<th class="text-center">Material</th>
								<th class="text-center">Descripcion</th>
								<th class="text-center">Estado</th>
								<th class="text-center">Oferta</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($products as $product)
								<tr>
									<td class="text-center">{{ $product->category->name_category }}</td>
									<td class="text-center">{{ $product->price }}</td>
									<td class="text-center">{{ $product->material }}</td>
									<td class="text-center">{{ $product->description_product }}</td>
									<td class="text-center">{{ $product->state_id }}</td>
									<td class="text-center">@if ($product->offer_id == 1) No @else Si @endif</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
				@if (Auth::user()->role == 2)
					<h2 class="text-center">Lista de Productos</h2>
					<p class="text-center">Aquí encontrarás todos nuestros productos</p>
					<div id="product-home" class="col-md-12 col-md-offset- text-center">
						@foreach ($products as $product)
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
								<div class="text-center"">
									{{ $product->description_product }}
								</div>
								<h5 style="">{{ $product->category->name_category }}</h5>
							</div>
						@endforeach
					</div>
				@endif
			</div>
		</div>
	</div>
@endsection