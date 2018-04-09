@extends ('layout')

@section('contenido')

<br><div class="p-2 mb-2 bg-info text-white">
	<h1>Nueva propuesta </h1>
	</div>
</br>
<h3 class="text-secondary">Ingresa los datos</h3>
<br></br>

@if(session()->has('info'))
	<h3>{{session('info')}}</h3>
@else

<form method="POST" action="{{ route('propuestas.store') }}">
	<input type="hidden" name="_token" value="{{ Session::token() }}">
	
	<div class="form-group row">
	<label for="key" class="col-sm-1 col-form-label">idpropuesta</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="key">
		</div>
	</div>

	<div class="form-group">
	<label for="descripcionpropuesta">Propuesta</label>
		<textarea class="form-control" name="descripcionpropuesta" rows="2"></textarea> 
	</div>
	
	<br>
	<input type=submit class="btn btn-dark" value=Enviar>
	</br>
</form>
@endif
@stop