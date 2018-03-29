@extends ('layout')

@section('contenido')
<hi>Contacto </hi>
<hi>EMAIL </hi>

<form method="POST" action="contacto">
	<p><label for="nombre">
		Nombre
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

@stop