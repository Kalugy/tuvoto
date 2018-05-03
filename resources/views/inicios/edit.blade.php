@extends ('layout')


@section('contenido')

<div class="container" style="background-color: #eee; padding: 30px 10px 30px 10px ;" > 
<br><div class="p-2 mb-2 bg-info text-white">
	<h1>Editar esta eleccion </h1>
	</div>
</br>

<form method="POST" action="{{ route('inicios.update',$varinicio->id) }}">
	{!!method_field('PUT') !!}
	<input type="hidden" name="_token" value="{{ Session::token() }}">

	{{-- {!!csrf_field() !!} --}}
	<div class="form-group">	
	<label for="elecciones">Tipo de elecciones </label> 
		<textarea class="form-control" name="elecciones" rows="2">{{$varinicio->elecciones}}</textarea> 
	</div>

	<br>
	<input type=submit class="btn btn-dark" value=Editar>
	</br>
</form>
</div>

@stop