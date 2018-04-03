@extends ('layout')

@section('contenido')
<h1>Editar candidato</h1>

<form method="POST" action="{{ route('candidatos.update',$varcandidato->id) }}">
	{!!method_field('PUT') !!}
	<input type="hidden" name="_token" value="{{ Session::token() }}">

	
	<p><label for="candidato">
		Candidato
		<input type="text" name="candidato" value="{{$varcandidato->candidato}}">
	</label></p>
	<p><label for="partido">
		partido
		<input type="text" name="partido" value="{{$varcandidato->partido}}">
	</label></p>
	<p><label for="perfil">
		perfil
		<input type="text" name="perfil" value="{{$varcandidato->perfil}}">
	</label></p>
	<p><label for="nombreprograma">
		nombredelprograma
		<input type="text" name="nombreprograma" value="{{$varcandidato->nombreprograma}}">
	</label></p>

	<p><label for="propuesta_id">
		idenfica las propuesta
		<input type="text" name="propuesta_id" value="{{$varcandidato->propuesta_id}}">
	</label></p>
		
	

	<input type=submit value=Enviar>
</form>

@stop