@extends ('layout')

@section('contenido')


<div class="container-fluid">
	<div class="w-80 p-3" style="background-color: #eee;">
<div class="blockquote text-center" style="background-color: lightgreen;">
  <h1 class="display-3">Propuestas</h1>

</div>
	<br>
	
			<tbody>
			<h2 class='text-center'>
			<?php echo e($varpropuesta['descripcionpropuesta'])?>
			
			</h2>

			</tbody>
	</br>
		


<br>
<div class="slidecontainer">
<input type="range" name="edad" min="0" max="2" step="1" value="1">
</div>


<blockquote class="blockquote text-right">
<form method="POST" action="{{url('selecciones/'. $next)}}">
{!! csrf_field() !!}
<button type:"submit">Siguiente</button>
</form>
</blockquote>
</br>	
@stop
				
			

			  