{{-- pagina principal del admin --}}

{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  --}}

@extends('layout')

@section('contenido')
 


 
<div class="container" style="background-color: #eee; padding: 30px 10px 30px 10px ;" > 

<br>
<div class="container" style="text-align: center;color: white; background-color: #454748;
padding: 10px 10px 10px 10px;  ">
	<h1>Administrador </h1>
	</div>
</br>

	{{-- aca comienzan la tabla de inicio --}}

	<div class="container-fluid" style="background-color: #62ADED; margin: 1px; border-color: black; border-width: 5px;">
		<div class="row" >
		<div class="col-3">

<div class="container" style="padding: 10; margin: 10px; margin-top: 40px;">
  <div class="card text-center">
	  <div class="card-header">
	    
	  </div>
		  <div class="card-body">
		    <h5 class="card-title"></h5>
		    <p class="card-text">En esta seccion se editaran el tipo de elecciones</p>
		    <a href= "{{ route('inicios.create') }}">
				<button type="submit" class="btn btn-outline-info btn-sm" >Agregar inicio</button></a>
		  </div>
	  <div class="card-footer text-muted">
	   
	  </div>
</div>

</div>

		
		</div>
		
		<div class="col">


	<br><div class="p-2 mb-2 " style="text-align: center; background-color: #eee;">
	<h2>Inicio </h2>
	</div>
</br>
	
	{{-- primero mostramos el link o boton para crear un inicio --}}
	
	
	<table class="table bg-light" >
	
	<thead>
	  <tr class="table bg-Secondary">
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
	</div>

	</div>
	</div>
	
	
	<div class="container-fluid" style="background-color: #62ADED;">
		
		<div class="row" >
		<div class="col-3">

		
		<div class="container" style="padding: 10; margin: 10px; margin-top: 40px;">
  <div class="card text-center">
	  <div class="card-header">
	    
	  </div>
		  <div class="card-body">
		    <h5 class="card-title"></h5>
		    <p class="card-text">En esta seccion se editaran los candidatos</p>
		    <a href= "{{ route('candidatos.create') }}">
				<button type="submit" class="btn btn-outline-info btn-sm" >Agregar candidato</button></a>
		  </div>
	  <div class="card-footer text-muted">
	   
	  </div>
</div>

</div>





		
		</div>	
		<div class="col">
		{{-- comienza la tabla de candidato --}}
	<br><div class="p-2 mb-2 " style="text-align: center; background-color: #eee;">
	<h2>Candidatos </h2>
	</div>
</br>
	
	<table class="table bg-light" witdh="100%" cellspacing="10" cellpadding="8" >
	<thead>
	  <tr>
	    <th>Candidato</th>
	    <th>Partido</th>
	    <th>Perfil</th>
	    <th>Programa</th>
	    <th>Foto</th>
	    <th>Accion</th>
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
			<td><img src="imgcandidatos/{{$can->imagen }}" class="img-responsive" alt="no se tiene imagen" style="width: 80px;height: 90px;"> 	 
			</td>
			<td align="center">

				<a href= "{{ route('candidatos.edit',$can->id)}}">
			<button type="submit" class="btn btn-outline-info btn-sm" >Editar</button></a>
				</div>

				@if($can->id==1)
				@else
				<form style="display:inline" method="POST" action="{{route('candidatos.destroy',$can->id)}}">
					{!!csrf_field()!!}
					{!!method_field('DELETE')!!}
					<br><button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button></br>
				</form>
				@endif
			</td>
	  	</tr>
	  	@endforeach
	</tbody>
	</table> 	 
	<br></br>

</div>
</div>



	</div>

	<div class="container-fluid" style="background-color:#62ADED;">
		
		<div class="row" >
		<div class="col-3">


<div class="container" style="padding: 10; margin: 10px; margin-top: 40px;">
  <div class="card text-center">
	  <div class="card-header">
	    
	  </div>
		  <div class="card-body">
		    <h5 class="card-title"></h5>
		    <p class="card-text">En esta seccion se editaran las propuestas</p>
		    <a href= "{{ route('propuestas.create') }}">
				<button type="submit" class="btn btn-outline-info btn-sm" >Agregar propuestas</button></a>
		  </div>
	  <div class="card-footer text-muted">
	   
	  </div>
</div>

</div>


		
		</div>	
		<div class="col">
	
	
	{{-- aca comienzan las propuestas --}}
	 <br><div class="p-2 mb-2" style="text-align: center; background-color: #eee;">
	<h2>Propuestas </h2>
	</div>
</br>
	
	<table class="table bg-light" witdh="100%" >
	<thead>
	  <tr >
	    <th>Propuestade</th>
	    <th>Propuestas</th>
	    <th>Tipo de propuesta</th>
	    <th>Accion</th>
	  </tr>
	</thead>
	<tbody>
	  	{{-- @foreach ($varcandidato as $can) --}}
	  	@foreach ($varpropuesta as $propuesta)
	  	<tr>
			<td> {{$propuesta-> getcandidato() }}</td>
			<td>{{$propuesta->descripcionpropuesta }}</td>
			<td>{{$propuesta->tipo }}</td>
			<td align="center">
				<a href= "{{ route('propuestas.edit',$propuesta->key)}}">
			<button type="submit" class="btn btn-outline-info btn-sm" >Editar</button></a>
				</div>

				@if($propuesta->key==1)
				@else
				<form style="display:inline" method="POST" action="{{route('propuestas.destroy',$propuesta->key)}}">
					{!!csrf_field()!!}
					{!!method_field('DELETE')!!}
					<br><button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button></br>
				</form>
				@endif
			</td>
		  </tr>		
		@endforeach 
	</tbody>
	</table> 	 

	</div>
</div>

</div>

@stop	