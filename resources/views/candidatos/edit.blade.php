@extends ('layout')

@section('contenido')
<br><div class="p-2 mb-2 bg-info text-white">
	<h1>Editar candidato </h1>
	</div>
</br>

<form method="POST" action="{{ route('candidatos.update',$varcandidato->id) }}">
	{!!method_field('PUT') !!}
	<input type="hidden" name="_token" value="{{ Session::token() }}">

	
	<div class="form-group row">
	<label for="candidato" class="col-sm-2 col-form-label">Candidato</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="candidato" value="{{$varcandidato->candidato}}">
		</div>
	</div>
	

	<div class="form-group row">
	<label for="partido" class="col-sm-2 col-form-label">Partido</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="partido" value="{{$varcandidato->partido}}">
		</div>
	</div>

	<div class="form-group row">
	<label for="perfil" class="col-sm-2 col-form-label">Perfil</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="perfil" value="{{$varcandidato->perfil}}">
		</div>
	</div>

	<div class="form-group row">
	<label for="nombreprograma" class="col-sm-2 col-form-label">Nombre del programa</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="nombreprograma" value="{{$varcandidato->nombreprograma}}">
		</div>
	</div>

	<div class="form-group row">
	<label for="propuesta_id" class="col-sm-2 col-form-label">Identifica la propuesta</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="propuesta_id" value="{{$varcandidato->propuesta_id}}">
		</div>
	</div>
		
	
	<br> </br>
	<input type=submit class="btn btn-dark" value=Enviar>
</form>

@stop