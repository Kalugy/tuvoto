@extends ('layout')

@section('contenido')
<h1>LLena una nueva propuesta </h1>
<h1>Llena los datos</h1>

@if(session()->has('info'))
	<h3>{{session('info')}}</h3>
@else

<form method="POST" action="{{ route('mensajes.store') }}">
	<input type="hidden" name="_token" value="{{ Session::token() }}">
	<p><label for="propuesta">
		Propuesta
		<input type="text" name="propuesta">
	</label></p>
	<p><label for="propuesta_id">
		propuesta_id
		<input type="email" name="propuesta_id">
	</label></p>
	

	<input type=submit value=Enviar>
</form>
@endif
@stop