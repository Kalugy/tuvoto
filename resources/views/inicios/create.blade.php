@extends ('layout')

@section('contenido')

<br><div class="p-2 mb-2 bg-info text-white">
	<h1>Nueva eleccion </h1>
	</div>
</br>
<h3 class="text-secondary">Ingresa los datos</h3>
<br></br>
@if(session()->has('info'))
	<h3>{{session('info')}}</h3>
@else

<form method="POST" action="{{ route('inicios.store') }}">
	<input type="hidden" name="_token" value="{{ Session::token() }}">
	<div class="form-group">	
		<label for="elecciones">Tipo de elecciones </label> 
		<textarea class="form-control" name="elecciones" rows="2"></textarea>
	</div>
	<br>
	<input type=submit class="btn btn-dark"  value=Enviar>
	</br>
</form>
@endif
@stop