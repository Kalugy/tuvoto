@extends ('layout')

@section('contenido')


<div class="container-fluid">
	<div class="w-80 p-3" style="background-color: #eee;">
<div class="blockquote text-center" style="background-color: lightblue;">
  <h1 class="display-3">Propuestas</h1>
</div>
	<br>
	
			<tbody>
			<h2 class='text-center'>
			<?php echo e($varpropuesta['descripcionpropuesta'])?>
			<?php echo e($varpropuesta['valorpropuesta'])?>

			
			</h2>

			</tbody>
	</br>
		

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
<script type="text/javascript">
	$(document).ready(function(){ //Al cargar la página realiza una serie de acciones
		$val=$('#valor-range').html($("#valoracion").val());
		 ; /* Al cargar la página se mostrará 
en el label "valor-range" el valor del input */
		$('#valoracion').change(function() { /*Cada vez que el range cambie de valor, 
se cambiará el texto del label valor-range con el valor del input */
		var val=	$('#valor-range').html($(this).val());
		});
		
	});
</script>
 


<div class="slidecontainer">
<form method="POST">
	<label for="rating">Valora :  <label id="valor-range"></label> </label>
    <input type="range"  min="0" max="1" value="0" id="valoracion" name="valoracion" type="range">
    <input type="submit" name="enviar">
</form>



<blockquote class="blockquote text-right">
<form method="POST" action="{{url('selecciones/'.$next)}}">
{!! csrf_field() !!}
<button type:"submit">Siguiente</button>
</form>
</blockquote>
</br>	
@stop
				
			

			  