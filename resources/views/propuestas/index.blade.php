@extends ('layout')

@section('contenido')


<div class="container-fluid">
	<div class="w-80 p-3" style="background-color: #eee;">
<div class="blockquote text-center" style="background-color: lightgreen;">
  <h1 class="display-3">Propuestas</h1>

</div>
	<br>
	
			<tbody>
			@foreach ($varpropuesta as $prop)
			  	<tr>
					<td>
					<ul> 
						<?=$prop['descripcionpropuesta']?>
					</ul>
					</td>

			  	</tr>

			  	@endforeach
			</tbody>
	</br>
				
@stop