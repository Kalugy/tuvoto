{{-- pagina principal del admin --}}
@extends('layout')

@section('contenido')

<br><div class="p-2 mb-2 bg-info text-white">
	<h1>Administrador </h1>
	</div>
</br>

	{{-- aca comienzan la tabla de inicio --}}
	<h2><small class="text-muted"><strong>INICIO</strong></small></h2>
	
	{{-- primero mostramos el link o boton para crear un inicio --}}
	<a href= "{{ route('inicios.create') }}">Agregar inicio</a>
	
	<table witdh="100%" border="1" cellspacing="10" cellpadding="8">
	<thead>
	  <tr class=" table text-center table-dark">
	    <th>  Tipo de Elección</th>
	    <th>  Acción</th>
	  </tr>
	</thead>
	<tbody>
		{{-- para mostrar cada dato de valor de inicio --}}
	  	@foreach ($varinicio as $inicio)
	  	<tr>
			<td scope="row"> 
				{{-- <a href= "{{route('mensajes.show',$mensaje->id)}}"> --}}
				{{$inicio->elecciones }}
			
			</td>
			<td align="center" scope="row"> <a href= "{{ route('inicios.edit',$inicio->id )}}">Editar</a>
				
			<form style="display:inline" method="POST" action="{{route('inicios.destroy',$inicio->id)}}">
					{!!csrf_field()!!}
					{!!method_field('DELETE')!!}
					<br><button type="submit" class="btn btn-outline-primary btn-sm" >Eliminar</button></br>
			</form>		
			</td>


	  	</tr>

	  	@endforeach

	
	</tbody>
	</table> 	  	
	<br>
	
	{{-- comienza la tabla de candidato --}}
	<h2><small class="text-muted"><strong>CANDIDATO</strong></small></h2>
	<a href= "{{ route('candidatos.create') }}">Agregar candidato</a>
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
					<br><button type="submit" class="btn btn-outline-primary btn-sm">Eliminar</button></br>
				</form>
			</td>
	  	</tr>
	  	@endforeach
	</tbody>
	</table> 	 
	<br></br>
	{{-- aca comienzan las propuestas --}}
	 <h2><small class="text-muted"><strong>PROPUESTAS</strong></small></h2>
	<a href= "{{ route('propuestas.create') }}">Agregar propuestas</a>
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
					<br><button type="submit" class="btn btn-outline-primary btn-sm">Eliminar</button></br>
				</form>
			</td>
		  </tr>		
		@endforeach 
	</tbody>
	</table> 	 


@stop	