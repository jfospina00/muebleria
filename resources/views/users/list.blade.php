@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav id="menu-admin" class="navbar navbar-default">
					<div class="container-fluid">
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav text-center">
								<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('order') }}">Pedidos</a></li>
								<li class="text-center op-menu-admin"><a class="text-center activeMenu" href="{{ url('user') }}">Clientes</a></li>
								<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('product') }}">Productos</a></li>
								<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('offer') }}">Ofertas</a></li>
								<li class="text-center op-menu-admin"><a class="text-center" href="{{ url('position') }}">Anuncios</a></li>
							</ul>
						</div>
					</div>
				</nav>
				<table class="table">
					<thead>
						<tr>
							<th class="text-center">Tipo de Usuario </th>
							<th class="text-center">Nombre</th>
							<th class="text-center">Correo</th>
							<th class="text-center">Dirrección</th>
							<th class="text-center">Telefono</th>
							<th class="text-center">Celular</th>
							<th class="text-center">Estado</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td class="text-center">@if ($user->role == 2) Cliente @else Administrador 	@endif</td>
								<td class="text-center">{{ $user->name }} {{ $user->last_name }}</td>
								<td class="text-center">{{ $user->email }}</td>
								<td class="text-center">{{ $user->address }}</td>
								<td class="text-center">{{ $user->telephone }}</td>
								<td class="text-center">{{ $user->cellphone }}</td>
								<td class="text-center">{{ $user->state_id }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection