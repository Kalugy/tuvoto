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
	
		<h1>{{$varpropuesta->descripcionpropuesta}}</h1>
		{{-- <h1>{{$varkeys}}</h1> --}}
			

	</br>
	</div>


{{-- <blockquote class="blockquote text-center">
<br><br>
	<form method="GET" action="{{ route('ventanas.show',$miarray[0]) }}">
	{!! csrf_field() !!}
	
	<button type:"submit">NEXT</button>

	</form>
</br></br> --}}


<div class="container-fluid">
<br><br>
	<form method="GET" action="{{ route('ventanas.show',$json_numerosaleatorios[$numero]) }}">
	{!! csrf_field() !!}
{{-- with('estoesunarray',$estoesunarray)) --}}
	<button type:"submit">Siguiente</button>

	</form>
</br></br>
</div>

</div>

</body>
</html>				
@stop