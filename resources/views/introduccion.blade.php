@extends ('layout')

@section('contenido')




<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




<p><label for="mensaje">

	<div class="container-fluid">
	<div class="w-80 p-3" style="background-color: #eee;">
  
		<h2 class="text-black">¿Qué es tu voto?</h2>


		<p class="lead"><small class="text-black">Tu voto es un aplicativo web que facilita información sobre las propuestas de los candidatos de una elección, y busca orientar o afianzar la decisión del usuario en la votación.
		Ofrece la posibilidad de elegir con cuales propuestas se tiene afinifdad y con cuales no
		para finalmente arrojar resultados de favorabilidad respecto a cada candidato.</small></p>
			


		<h1 class="text-black">¿Cómo funciona?</h1>
		<p class="lead"><small class="text-black">Las propuestas se motraran una por una y sin saber a qué candidato pertenecen las mismas.
		Se debe marcar, mediante un slide, si se esta "de acuerdo" o en "desacuerdo" con la propuesta, y pasar a la siguiente hasta finalizar.
		Con base en la selección realizada, se arrojan los resultados, mostrando la fotografía de los candidatos,los porcentajes de afinidad con cada uno y las propuestas(marcadas como "De acuerdo" y "desacuerdo") que llevaron a obtener dicho resultado. </small></p>


	
	
	<h1 style="color: black;" >¿De que se tratan las elecciones?</h1>
		<table witdh="100%"  >
			<thead>
			  <tr>
				  
				    <h1><th class="text-black"></th></h1>
				  
			   


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
	
	</br>
		
	<h1>¿Quienes son los candidatos?</h1>
	<table witdh="100%"  >
	<h5 class="text-secondary"></h5>
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
	


<blockquote class="blockquote text-center">
<br><br>
<form method="POST" action="{{url('selecciones/1')}}">
{!! csrf_field() !!}

<button type:"submit">Empieza ahora</button>
</form>
</br></br>
</blockquote>
</div>

@stop