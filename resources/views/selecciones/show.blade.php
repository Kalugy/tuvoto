@extends ('layout')

@section('contenido')


<div class="container" style="background-color: #eee; padding: 30px 10px 30px 10px ;" > 

<div class="container" style="text-align: center;  color: white; background-color: #09126E;
padding: 10px 10px 10px 10px;  ">
	<h1>Propuestas</h1>
	</div>



<div class="container-fluid" style="background-color: #C1C1C1; margin: 1px; border-color: black; border-width: 5px;">
		<div class="row" >
		<div class="col">
			

			{{$varpropuesta['descripcionpropuesta']}}
		</div>
		
		<div class="col">
<br>
<div class="slidecontainer">
<input type="range" name="edad" min="0" max="2" step="1" value="1">
</div>
</div>
</div>
 </div> 


	
		




<div class="container-fluid">
<form method="POST" action="{{url('selecciones/'. $next)}}">
{!! csrf_field() !!}
<button type:"submit">Siguiente</button>
</form>
</div>
</br>	

</div>
@stop
				
			

			  