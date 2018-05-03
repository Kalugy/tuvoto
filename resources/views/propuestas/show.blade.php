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
			<?php echo e($varpropuesta['id'])?>
			<?php echo e($varpropuesta['key'])?>
			<?php echo e($varpropuesta['descripcionpropuesta'])?>
			<?php echo e($varpropuesta['valorpropuesta'])?>
			<?php echo e($varpropuesta->getCandidato())?>
			</h2>

			</tbody>
	</br>



	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){ //Al cargar la página realiza una serie de acciones
		
		/*$('#valor-range').html($("#valoracion").val()); /* Al cargar la página se mostrará 
en el label "valor-range" el valor del input */
		$('#valoracion').change(function() { /*Cada vez que el range cambie de valor, 
		se cambiará el texto del label valor-range con el valor del input */
		$('#valor-range').html($(this).val());
		});
		<?php $valu='valor-range';
		echo("valor-range");
		?>
		
	});
</script>

<?php $valu='#valor-range';
		echo($valu);
		?>


		
<br>
<form method="POST" >
<div class="slidecontainer-center">
	<label for="rating">Valorar: <label id="valor-range"></label> </label>
    <input type="range" min="0" max="1" id="valoracion" name="valoracion" >
    <p><input type="submit" value="Validar"></p>
   </div>
</form>

<blockquote class="blockquote text-right">
<form method="POST" action="{{url('propuestas/'. $next)}}">
{!! csrf_field() !!}
<button type:"submit">Siguiente</button>
</form>
</blockquote>
</br>			
@stop
				
			

			  