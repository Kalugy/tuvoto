{{-- pagina principal del admin --}}
@extends('layout')

@section('contenido')



<div class="container" style="background-color: #eee; padding: 30px 10px 30px 10px ;" > 

<br>
<div class="container" style="text-align: center;  color: white; background-color: #09126E;
padding: 10px 10px 10px 10px;  ">
	<h1>Administrador </h1>
	</div>
</br>

	{{-- aca comienzan la tabla de inicio --}}

	<div class="row">
		<div class="col-3">


			<div class="container" style="background-color: white">
			<a href= "{{ route('inicios.create') }}">Agregar inicio</a>
			<br>
			<a href= "{{ route('candidatos.create') }}">Agregar candidato</a>
			<br>
			<a href= "{{ route('propuestas.create') }}">Agregar propuestas</a>
			</div>
		</div>	


        <div class="col">
	<br><div class="p-2 mb-2 bg-info text-white" style="text-align: center;">
	<h2>Inicio </h2>
	</div>
</br>
	
	{{-- primero mostramos el link o boton para crear un inicio --}}
	
	
	<table class="table " witdh="100%" border="1" cellspacing="8" cellpadding="8">
	
	<thead class="thead-dark">
	  <tr>
	    <th>  Tipo de Elección</th>
	    <th>  Acción</th>
	  </tr>
	</thead>
	<tbody>
		{{-- para mostrar cada dato de valor de inicio --}}
	  	@foreach ($varinicio as $inicio)
	  	<tr>
			<td > 
				{{-- <a href= "{{route('mensajes.show',$mensaje->id)}}"> --}}
				{{$inicio->elecciones }}
			
			</td>
			<td > 
			<a href= "{{ route('inicios.edit',$inicio->id )}}">
			<button type="submit" class="btn btn-outline-info btn-sm" >Editar</button></a>
				</div>
				
			<form style="display: inline-block;" method="POST" action="{{route('inicios.destroy',$inicio->id)}}">
					{!!csrf_field()!!}
					{!!method_field('DELETE')!!}
					<br><button type="submit" class="btn btn-outline-danger btn-sm" >Eliminar</button></br>
			</form>		
				
		
			</td>


	  	</tr>

	  	@endforeach

	
	</tbody>
	</table> 	  	
	<br>
	
	{{-- comienza la tabla de candidato --}}
	<br><div class="p-2 mb-2 bg-info text-white" style="text-align: center;">
	<h2>Candidatos </h2>
	</div>
</br>
	
	<table witdh="100%" border="1" cellspacing="10" cellpadding="8" >
	<thead>
	  <tr class="table text-center table-dark">
	    <th>Candidato</th>
	    <th>Partido</th>
	    <th>Perfil</th>
	    <th>programa</th>
	    <th>accion</th>
	  </tr>
	</thead>
	<tbody>
	  	@foreach ($varcandidato as $can)
	  	<tr>
			<td> 
				{{-- lo que esta comentado debajo era para mostrar datos del candidato si se necesitara --}}
				{{-- <a href= "{{route('mensajes.show',$mensaje->id)}}"> --}}
				{{$can->candidato }}
			{{-- </a> --}}
			</td>
			<td> {{$can->partido }}</td>
			<td> {{$can->perfil }}</td>
			<td> {{$can->nombreprograma }}</td>
			<td align="center">
				<a href="{{ route('candidatos.edit',$can->id)}}" >Editar</a>
				<form style="display:inline" method="POST" action="{{route('candidatos.destroy',$can->id)}}">
					{!!csrf_field()!!}
					{!!method_field('DELETE')!!}
					<br><button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button></br>
				</form>
			</td>
	  	</tr>
	  	@endforeach
	</tbody>
	</table> 	 
	<br></br>
	{{-- aca comienzan las propuestas --}}
	 <br><div class="p-2 mb-2 bg-dark text-white" style="text-align: center;">
	<h2>Propuestas </h2>
	</div>
</br>
	
	<table witdh="100%" border="1" cellspacing="10" cellpadding="8">
	<thead>
	  <tr class="table text-center table-dark">
	    <th>Propuestade</th>
	    <th>Propuestas</th>
	    <th>Accion</th>
	  </tr>
	</thead>
	<tbody>
	  	{{-- @foreach ($varcandidato as $can) --}}
	  	@foreach ($varpropuesta as $propuesta)
	  	<tr>
			<td> {{$propuesta-> getcandidato() }}</td>
			<td>{{$propuesta->descripcionpropuesta }}</td>
			<td align="center">
				<a href="{{ route('propuestas.edit',$propuesta->key)}}" >Editar</a>
				<form style="display:inline" method="POST" action="{{route('propuestas.destroy',$propuesta->key)}}">
					{!!csrf_field()!!}
					{!!method_field('DELETE')!!}
					<br><button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button></br>
				</form>
			</td>
		  </tr>		
		@endforeach 
	</tbody>
	</table> 	 

	</div>
</div>

</div>

@stop	