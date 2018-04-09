@extends ('layout')

@section('contenido')
<h1>Propuestas de </h1>


	<table witdh="100%" border="1" >
	<thead>
	  <tr>


	    <th>idpropuestas</th>

	    <th>Propuesta</th>

	  </tr>
	</thead>
	<tbody>
	  	@foreach($varpropuesta as $propuesta)
	  	<tr>
			
			
			{{-- <td> {{$propuesta-> getpropuesta() }}</td> --}}
			{{-- {{$propuesta->id }} --}}
			<td> 77</td>
			<td> 77</td>
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