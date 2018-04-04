@extends ('layout')

@section('contenido')
<h1>Editar </h1>

<form method="POST" action="{{ route('mensajes.update',$mensaje->id) }}">
	{!!method_field('PUT') !!}
	<input type="hidden" name="_token" value="{{ Session::token() }}">

	{{-- {!!csrf_field() !!} --}}
	<p><label for="nombre">
		Nombres
		<input type="text" name="nombre" value="{{$mensaje->nombre}}">
	</label></p>
	<p><label for="email">
		email
		<input type="email" name="email" value="{{$mensaje->email}}">
	</label></p>
	<p><label for="mensaje">
		Mensaje
		<textarea name="mensaje">{{$mensaje->mensaje}}</textarea> 
	</label></p>

	<input type=submit value=Enviar>
</form>


<table witdh="100%" border="1" >
	<thead>
	  <tr>

	    <th>Propuestaid</th>

	    
	    <th>Propuestas</th>
	    <th>Accion</th>


	  </tr>
	</thead>
	<tbody>
	  	@foreach ($varcandidato as $can)
	  	<tr>
			<td> 
				{{-- <a href= "{{route('mensajes.show',$mensaje->id)}}"> --}}
				{{$can->propuesta_id }}
			{{-- </a> --}}
			</td>
		
			<td>
			{{$can-> propu }}	
			@foreach ($ca as $can)
				@if(propu()==='descripcionpropuesta'){
					$can->;
				}
					else 'sinpropuestas';
				}}

				@endif
			@endforeach	
			
			 </td>
			

			<td>
				
				<a href="{{ route('propuestas.edit',$can->id)}}" >Editar</a>
				{{-- <form style="display:inline" method="POST" action="{{route('candidatos.destroy',$can->id)}}">
					{!!csrf_field()!!}
					{!!method_field('DELETE')!!}
					<button type="submit">Eliminar</button>
					

				</form> --}}
			</td>

	  	</tr>

	  	@endforeach
	</tbody>
	</table> 	 



@stop