@extends ('layout')


@section('contenido')


<div class="container" style="background-color: #eee; padding: 30px 10px 30px 10px ;" > 
<br><div class="p-2 mb-2 bg-info text-white">
	<h1>Editar propuestaaaa </h1>
	</div>
</br>
<h3 class="text-secondary">Ingresa los datos</h3>
<br></br>



<form method="POST" action="{{ route('propuestas.update',$varpropuesta->key) }}">
	{!!method_field('PUT') !!}
	<input type="hidden" name="_token" value="{{ Session::token() }}">

	{{-- <div class="form-group row">
	<label for="key" class="col-sm-1 col-form-label">idpropuesta</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="key" value="{{$varpropuesta->key}}">
		</div>
	</div> --}}


	<div class="form-group">
	<label for="descripcionpropuesta">Propuesta</label>
		<textarea class="form-control" name="descripcionpropuesta">{{$varpropuesta->descripcionpropuesta}}</textarea>  
	</div>

	<div class="form-group">
	<label for="tipo">Tipo de Propuesta</label>
		<textarea class="form-control" name="tipo">{{$varpropuesta->tipo}}</textarea>  
	</div>

	
	<br>
	<input type=submit class="btn btn-dark" value=Editar>
	</br>
</form>


</div>
@stop