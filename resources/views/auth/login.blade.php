@extends ('layout')

@section('contenido')
<h1>Login</h1>

	<form method="POST" action="/login">
		{!!csrf_field()!!}
		<input type="usuario" name="usuario" placeholder="Usuario">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="Entrar">
	</form>
	<br>
@stop