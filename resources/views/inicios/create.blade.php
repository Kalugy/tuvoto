@extends ('layout')

@section('contenido')
<h1>Contactoss </h1>
<h1>Llena los datos</h1>

@if(session()->has('info'))
	<h3>{{session('info')}}</h3>
@else

<form method="POST" action="{{ route('inicios.store') }}">
	<input type="hidden" name="_token" value="{{ Session::token() }}">
	<p><label for="candidato">
		candidato
		<input type="text" name="candidato">
	</label></p>
		
	<p><label for="elecciones">
		Elecciones
		<textarea name="elecciones"></textarea> 
	</label></p>

	<input type=submit value=Enviar>
</form>
@endif
@stop