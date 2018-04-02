@extends ('layout')

@section('contenido')
<h1>Editar </h1>

<form method="POST" action="{{ route('inicios.update',$varinicio->id) }}">
	{!!method_field('PUT') !!}
	<input type="hidden" name="_token" value="{{ Session::token() }}">

	{{-- {!!csrf_field() !!} --}}
	<p><label for="elecciones">
		Elecciones
		<textarea name="elecciones">{{$varinicio->elecciones}}</textarea> 
	</label></p>

	<input type=submit value=Enviar>
</form>


@stop