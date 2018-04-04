@extends ('layout')

@section('contenido')
<h1>Añadir una nueva propuesta</h1>
<h1>Llena los datos</h1>

@if(session()->has('info'))
	<h3>{{session('info')}}</h3>
@else

<form method="POST" action="{{ route('propuestas.store') }}">
	<input type="hidden" name="_token" value="{{ Session::token() }}">
	
	<p><label for="key">
		idpropuesta
		<input type="text" name="key">
	</label></p>


	<p><label for="descripcionpropuesta">
		Propuesta
		<textarea name="descripcionpropuesta"></textarea> 
	</label></p>

	<input type=submit value=Enviar>
</form>
@endif
@stop