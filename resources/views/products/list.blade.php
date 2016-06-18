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
									<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('order') }}">Pedido</a></li>
									<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('user') }}">Clientes</a></li>
									<li class="text-center op-menu-admin"><a class="text-center activeMenu" href="{{ url('product') }}">Muebles</a></li>
									<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('offer') }}">Ofertas</a></li>
									<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('position') }}">Anuncios</a></li>
								</ul>
							</div>
						</div>
					</nav>
					{{-- ============================== MODAL ============================== --}}
						<div class="modal fade" id="newProduct" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document" id="content-modal">
							<div class="modal-content">
								<div class="modal-body">
									<h3 class="text-center">Nuevo Mueble <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></h3>
									<form id="form" class="transition" action="{{ url('product') }}" method="post" enctype="multipart/form-data">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="form-group">
											<label class=" control-label">Mueble</label>
											<div class="">
												<select name="category_id" id="" class="form-control" >
													@foreach ($categories as $category)
														<option value="{{ $category->id }}"><span>{{ $category->name_category }}</span></option>
													@endforeach
												</select>
											</div>
											<label class=" control-label">Material</label>
											<div class="">
												<input type="text" class="form-control" name="material">
											</div>
										</div>
										<div class="form-group">
											<label class=" control-label">Precio</label>
											<div class="">
												<input type="number" class="form-control" name="price">
											</div>
											<label class=" control-label">Oferta</label>
											<div class="">
												<select name="offer_id" id="" class="form-control" >
													@foreach ($offers as $offer)
														<option value="{{ $offer->id }}">{{ $offer->name_offer }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class=" control-label">Descripcion Mueble</label>
											<div class="">
												<textarea name="description_product" id="" class="form-control"></textarea>
											</div>
										</div>
										<div id="content-btn-add-imageProduct" class="form-group">
											<h4 class=" control-label">Imagenes del Mueble</h4>
											<div class="">
												<a id="btn-add-imageProduct" class="btn btn-warning">Agregar Imagen</a>
											</div>
											<div class="hidden-xs-12 hidden-sm-4 hidden-md-4 hidden-lg-2 ctnt-btn-add-imageProduct" level="lvl-0"></div>
										</div>
										<button class="btn btn-success" type="input">Agregar</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					{{-- ============================== MODAL ============================== --}}
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button id="btn-newProduct" class="btn btn-success">Nuevo Mueble</button>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th class="text-center">Mueble</th>
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
									<td class="text-center">{{ $product->state->name_state }}</td>
									<td class="text-center">@if ($product->offer_id == 1) No @else Si @endif</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
				{{-- ==================================== Role 2 ================================ --}}
				@if (Auth::user()->role == 2)
					<h2 class="text-center">Lista de Muebles</h2>
					<p class="text-center">Aquí encontrarás todos nuestros Muebles</p>
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