@extends ('layout2')

@section('contenido')

<!DOCTYPE html>
<html>
<head>
	<title>Propuestas</title>


	{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	{{-- <link rel="stylesheet" type="text/css" href="/public/css/onoffswitch1" media="screen" /> --}}
	{{-- <link rel="stylesheet" href="{{ asset("public/css/onoffswitch1.css") }}"> --}}


	<link href="{!! asset('css/onoffswitch1.css') !!}" media="all" rel="stylesheet" type="text/css" />


</head>
<body>


<div class="container-fluid">
	<div class="w-80 p-3" ">


<div class="blockquote text-center" ">
  <h1 class="display-3">Propuestas</h1>
</div>
<div class="row" >
		<div class="col-8">
	<div class="container-fluid">
		<br>
		
			<h1>{{$varpropuesta->descripcionpropuesta}}</h1>
			{{-- <h1>{{$varkeys}}</h1> --}}
				

		</br>
		</div>
		</div>

		<div class="col">

{{-- <blockquote class="blockquote text-center">
<br><br>
	<form method="GET" action="{{ route('ventanas.show',$miarray[0]) }}">
	{!! csrf_field() !!}
	
	<button type:"submit">NEXT</button>

	</form>
</br></br> --}}


<div class="container-fluid">
<br><br><br>
	
	<form method="POST" action="{{ route('ventanas.update',$numerodekeys) }}">
	{!!method_field('PUT') !!}
{{-- with('estoesunarray',$estoesunarray)) --}}
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="onoffswitch1">
    <input type="checkbox" name="onoffswitch1" value="1" class="onoffswitch1-checkbox" id="myonoffswitch1" checked>
    <label class="onoffswitch1-label" for="myonoffswitch1">
        <span class="onoffswitch1-inner"></span>
        {{-- <span value="0" class="onoffswitch1-switch"></span> --}}
    </label>
    </div>

	<br><br><br></br></br></br>
	<div class="container " >
	<button type:"submit">Finalizar</button>
	</div>
	</form>
</br></br></br>
</div>
</div>
</div>

</body>
</html>				
@stop