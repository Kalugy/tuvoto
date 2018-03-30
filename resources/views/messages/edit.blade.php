@extends ('layout')

@section('contenido')
<h1>Editar </h1>

<form method="POST" action="{{ route('mensajes.update',$mensaje->id) }}">
	{!!method_field('PUT') !!}
	<input type="hidden" name="_token" value="{{ Session::token() }}">

	{{-- {!!csrf_field() !!} --}}
	<p><label for="nombre">
		Nombres
		<input type="text" name="nombre" value="{{$mensaje->nombre}}">
	</label></p>
	<p><label for="email">
		email
		<input type="email" name="email" value="{{$mensaje->email}}">
	</label></p>
	<p><label for="mensaje">
		Mensaje
		<textarea name="mensaje">{{$mensaje->mensaje}}</textarea> 
	</label></p>

	<input type=submit value=Enviar>
</form>


@stop