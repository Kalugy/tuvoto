
@extends ('layout')

@section('contenido')


<p><label for="mensaje">
		<h1>¿Que es tu voto?</h1>


		<p>Tu voto es un app que ...</p>



		<h1>¿Como funciona?</h1>
		<p>es un cuestionario que se debe llenar de tal manera y tal otra ...</p>
		<table witdh="100%"  >
	<thead>
	  <tr>

	    <th>Elecciones de:</th>

	   


	  </tr>
	</thead>
	<tbody>
	  	@foreach ($varinicio as $inicio)
	  	<tr>
			<td> 
				{{-- <a href= "{{route('mensajes.show',$mensaje->id)}}"> --}}
				{{$inicio->elecciones }}
			{{-- </a> --}}
			

	  	</tr>

	  	@endforeach
	</tbody>
	</table> 
		

		<table witdh="100%"  >
	<thead>
	  <tr>

	    <th>Candidatos</th>

	    


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
			

	  	</tr>

	  	@endforeach
	</tbody>
	</table> 	 
		

<input type=submit value="Empieza ahora">

@stop