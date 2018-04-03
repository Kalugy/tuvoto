@extends('layout')

@section('contenido')

	<h1>Todos los mensajes</h1>
	{{-- $messages --}}
	<table witdh="100%" border="1" >
	<thead>
	  <tr>

	    <th>nombre</th>

	    <th>email</th>

	    <th>mensaje</th>
	    <th>acciones</th>

	  </tr>
	</thead>
	<tbody>
	  	@foreach ($messages as $mensaje)
	  	<tr>
			<td> 
				<a href= "{{route('mensajes.show',$mensaje->id)}}">
				{{$mensaje->nombre }}
			</a>
			</td>
			<td> {{$mensaje->email }}</td>
			<td> {{$mensaje->mensaje }}</td>
			<td>
				
				<a href="{{ route('mensajes.edit',$mensaje->id )}}" >editar</a>
				<form style="display:inline" method="POST" action="{{route('mensajes.destroy',$mensaje->id)}}">
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