@extends('layout')

@section('contenido')

	<h1>Muestra inicio candidato y propuestas</h1>
	
	<a href= "{{ route('inicios.create') }}">CREAR INICIO (añadir)</a>
	
	$varinicio
	<table witdh="100%" border="1" >
	<thead>
	  <tr>

	    <th>Elecciones</th>

	    <th>Candidato</th>


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
			<td> {{$inicio->candidato }}</td>
			{{-- <td>
				
				<a href="{{ route('mensajes.edit',$mensaje->id )}}" >editar</a>
				<form style="display:inline" method="POST" action="{{route('mensajes.destroy',$mensaje->id)}}">
					{!!csrf_field()!!}
					{!!method_field('DELETE')!!}
					<button type="submit">Eliminar</button>
					

				</form>
			</td> --}}


	  	</tr>

	  	@endforeach

	</tbody>
	</table>

@stop	