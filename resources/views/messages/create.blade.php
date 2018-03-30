@extends ('layout')

@section('contenido')
<h1>Contactoss </h1>
<h1>Llena los datos</h1>

@if(session()->has('info'))
	<h3>{{session('info')}}</h3>
@else

<form method="POST" action="{{ route('mensajes.store') }}">
	<input type="hidden" name="_token" value="{{ Session::token() }}">
	<p><label for="nombre">
		Nombres
		<input type="text" name="nombre">
	</label></p>
	<p><label for="email">
		email
		<input type="email" name="email">
	</label></p>
	<p><label for="mensaje">
		Mensaje
		<textarea name="mensaje"></textarea> 
	</label></p>

	<input type=submit value=Enviar>
</form>
@endif
@stop