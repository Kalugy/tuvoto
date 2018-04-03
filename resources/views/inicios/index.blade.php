@extends('layout')

@section('contenido')

	<h1>Muestra inicio candidato y propuestas</h1>
	
	<a href= "{{ route('inicios.create') }}">CREAR INICIO (añadir)</a>
	
	
	<table witdh="100%" border="1" >
	<thead>
	  <tr>

	    <th>Elecciones</th>

	    <th>Accion</th>


	  </tr>
	</thead>
	<tbody>
	  	@foreach ($varinicio as $inicio)
	  	<tr>
			<td> 
				{{-- <a href= "{{route('mensajes.show',$mensaje->id)}}"> --}}
				{{$inicio->elecciones }}
			{{-- </a> --}}
			</td>
			<td> <a href= "{{ route('inicios.edit',$inicio->id )}}">Editar</a>
				
			<form style="display:inline" method="POST" action="{{route('inicios.destroy',$inicio->id)}}">
					{!!csrf_field()!!}
					{!!method_field('DELETE')!!}
					<button type="submit">Eliminar</button>
			</form>		
			</td>


	  	</tr>

	  	@endforeach
	</tbody>
	</table> 	  	
	<br>
	
	

	<a href= "{{ route('candidatos.create') }}">CREAR candidato (añadir)</a>
	<table witdh="100%" border="1" >
	<thead>
	  <tr>

	    <th>Candidato</th>

	    <th>Partido</th>
	    <th>Perfil</th>
	    <th>programa</th>
	    <th>Propuestas</th>
	    <th>accion</th>


	  </tr>
	</thead>
	<tbody>
	  	@foreach ($varcandidato as $can)
	  	<tr>
			<td> 
				{{-- <a href= "{{route('mensajes.show',$mensaje->id)}}"> --}}
				{{$can->candidato }}
			{{-- </a> --}}
			</td>
			<td> {{$can->partido }}</td>
			<td> {{$can->perfil }}</td>
			<td> {{$can->nombreprograma }}</td>
			<td>
				<a href= "{{route('propuestas.show',$can->propuesta_id)}}">

				 {{$can->propuesta_id }}
				{{-- {{$can-> propu() }} --}}
			</a>
			 </td>
			

			<td>
				
				<a href="{{ route('candidatos.edit',$can->id)}}" >Editar</a>
				<form style="display:inline" method="POST" action="{{route('candidatos.destroy',$can->id)}}">
					{!!csrf_field()!!}
					{!!method_field('DELETE')!!}
					<button type="submit">Eliminar</button>
					

				</form>
			</td>

	  	</tr>

	  	@endforeach
	</tbody>
	</table> 	 


@stop	