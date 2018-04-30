
@extends ('layout')

@section('contenido')




<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




<p><label for="mensaje">

	<div class="container-fluid">
	<div class="w-80 p-3" style="background-color: #eee;">
  
		<h2 class="text-primary">¿Qué es tu voto?</h2>


		<p class="lead"><small class="text-muted">Tu voto es un aplicativo web que facilita información sobre las propuestas de los candidatos de una elección, y busca orientar o afianzar la decisión del usuario en la votación.
		Ofrece la posibilidad de elegir con cuales propuestas se tiene afinifdad y con cuales no
		para finalmente arrojar resultados de favorabilidad respecto a cada candidato.</small>></p>
			


		<h1 class="text-primary">¿Cómo funciona?</h1>
		<p class="lead">Verás las propuestas una por una y sin saber a qué candidato pertenecen la mismas.
		Debes marcar, mediante un slide, si estás "de acuerdo" o en "desacuerdo" con la propuesta, y pasar a la siguiente hasta terminar.
		Con base en la selección realizada, se arrojan los resultados, mostrando la fotografía de los candidatos,los porcentajes de afinidad con cada uno y las propuestas(marcadas como "De acuerdo" y "desacuerdo") que te llevaron a obtener dicho resultado. </p>

</div>
	<br>
	<div class="container justify-content-center">
	<div class="w-50 p-3" style="background-color: #fff;">
		<table witdh="100%"  >
			<thead>
			  <tr>
				  
				    <th class="text-secondary">Tipo de Elecciones:</th>
				  
			   


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

			  	</tr>

			  	@endforeach

			</tbody>

		</table> 
	</div>
	</div>
	</br>
		
	<div class="container justify-content-center">
	<div class="w-50 p-3" style="background-color: #fff;">
	<table witdh="100%"  >
	<h5 class="text-secondary">Candidatos</h5>
		<thead>
		  <tr>

		    <th> </th>  

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
	</div> 
	</div>


<blockquote class="blockquote text-center">
<br><br>
<form method="POST" action="{{url('selecciones/1')}}">
{!! csrf_field() !!}

<button type:"submit">Empieza ahora</button>
</form>
</br></br>
</blockquote>


@stop