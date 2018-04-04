@extends ('layout')

@section('contenido')
<h1>Editar propuesta </h1>
<h1>Llena los datos</h1>



<form method="POST" action="{{ route('propuestas.update',$varpropuesta->id) }}">
	{!!method_field('PUT') !!}
	<input type="hidden" name="_token" value="{{ Session::token() }}">
	<p><label for="key">
		idpropuesta
		<input type="text" name="key" value="{{$varpropuesta->key}}">
	</label></p>


	<p><label for="descripcionpropuesta">
		Propuesta
		<textarea name="descripcionpropuesta">{{$varpropuesta->descripcionpropuesta}}</textarea>  
	</label></p>
	

	<input type=submit value=Enviar>
</form>

@stop