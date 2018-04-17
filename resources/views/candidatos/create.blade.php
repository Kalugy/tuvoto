
@extends ('layout')

@section('contenido')

<br><div class="p-2 mb-2 bg-info text-white">
	<h1>Nuevo candidato </h1>
	</div>
</br>
<h3 class="text-secondary">Ingresa los datos</h3>
<br></br>


@if(session()->has('info'))
	<h3>{{session('info')}}</h3>
@else

<form method="POST" action="{{ route('candidatos.store') }}">
	<input type="hidden" readonly class="form-control-plaintext" name="_token" value="{{ Session::token() }}">

	<div class="form-group row">
	<label for="candidato" class="col-sm-2 col-form-label">Candidato</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="candidato">
		</div>
	</div>
	
	<div class="form-group row">
	<label for="partido" class="col-sm-2 col-form-label">Partido</label>
		<div class="col-sm-5">
		<input type="text"  class="form-control" name="partido">
		</div>
	</div>

	<div class="form-group row">
	<label for="perfil" class="col-sm-2 col-form-label">Perfil</label>
		<div class="col-sm-5">
		<input type="text"  class="form-control" name="perfil">
		</div>
	</div>

	<div class="form-group row">
	<label for="nombreprograma" class="col-sm-2 col-form-label">Nombre del programa</label>
		<div class="col-sm-5">
		<input type="text"  class="form-control" name="nombreprograma">
		</div>
	</div>

		
	<br> </br>
	<input type=submit class="btn btn-dark" value=Enviar>
</form>
@endif
@stop