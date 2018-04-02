@extends ('layout')

@section('contenido')
<h1>Añadir un nuevo candidato </h1>


@if(session()->has('info'))
	<h3>{{session('info')}}</h3>
@else

<form method="POST" action="{{ route('candidatos.store') }}">
	<input type="hidden" name="_token" value="{{ Session::token() }}">

	
	<p><label for="candidato">
		Candidato
		<input type="text" name="candidato">
	</label></p>
	<p><label for="partido">
		partido
		<input type="text" name="partido">
	</label></p>
	<p><label for="perfil">
		perfil
		<input type="text" name="perfil">
	</label></p>
	<p><label for="nombreprograma">
		nombredelprograma
		<input type="text" name="nombreprograma">
	</label></p>

	<p><label for="idpropuesta">
		idenfica las propuesta
		<input type="text" name="idpropuesta">
	</label></p>
		
	

	<input type=submit value=Enviar>
</form>
@endif
@stop