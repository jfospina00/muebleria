@extends('app')

@section('content')
<div id="modify-user" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="alert alert-warning">
		<h5 class="text-center">
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			<span class="sr-only"></span>
			Atención!! Tienes campos sin registrar en tu perfil
			<strong>Recuerda que para poder realizar un pedido, debes completar toda la información del perfil.</strong>
		</h5>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
		<form class="" action="{{ url('user/'.$user->id) }}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="state" value="2">
			<div class="form-group ">
				<label class="col-xs-12 col-sm-12 col-md-6 col-lg-6 control-label"><strong>Nombres</strong></label>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input type="text" class="form-control" name="name" value="{{ $user->name }}">
				</div>
			</div>
			<div class="form-group ">
				<label class="col-xs-12 col-sm-12 col-md-6 col-lg-6 control-label"><strong>Apellidos</strong></label>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
				</div>
			</div>
			<div class="form-group ">
				<label class="col-xs-12 col-sm-12 col-md-6 col-lg-6 control-label"><strong>correo</strong></label>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input type="email" class="form-control" name="email" value="{{ $user->email }}">
				</div>
			</div>
			<div class="form-group ">
				<label class="col-xs-12 col-sm-12 col-md-6 col-lg-6 control-label"><strong>Teléfono</strong></label>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input type="number" class="form-control" name="telephone" value="{{ $user->telephone }}">
				</div>
			</div>
			<div class="form-group ">
				<label class="col-xs-12 col-sm-12 col-md-6 col-lg-6 control-label"><strong>Celular</strong></label>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input type="number" class="form-control" name="cellphone" value="{{ $user->cellphone }}">
				</div>
			</div>
			<div class="form-group ">
				<label class="col-xs-12 col-sm-12 col-md-6 col-lg-6 control-label"><strong>Dirección</strong></label>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input type="text" class="form-control" name="address" value="{{ $user->address }}">
				</div>
			</div>
			<div class="form-group ">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<button type="submit" class="btn btn-success col-xs-12 col-sm-12 col-md-12 col-lg-12">Guardar Perfil</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection