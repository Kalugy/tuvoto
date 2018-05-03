@extends ('layout')

@section('contenido')


<!DOCTYPE html>
<html>
<head>
	<title>c:</title>
</head>
<body>


<div class="container-fluid">
	<div class="w-80 p-3" style="background-color: #eee;">
<div class="blockquote text-center" style="background-color: lightgreen;">
  <h1 class="display-3">Propuestas</h1>

</div>
<div class="container-fluid">
	<br>
	
			<tbody>

			@foreach ($varpropuesta as $prop)
			  	<tr>
					<td>
					<ul> 
						<?php echo e($prop->key)?>
						<?php echo e($prop->descripcionpropuesta)?>
						<?php echo e($prop->valorpropuesta)?>
					</ul>
					</td>

			  	</tr>

			  	@endforeach


			</tbody>
	</br>
	</div>
</body>
</html>
				
@stop