{{-- para los errores cuando no se encuentra una ruta sale este error --}}
<!doctype html>
<html lang="en">
  <head>
	<title>Error</title>
    <meta charset="utf-8">

  </head>
    <body>
        <!--<h1> {{ request()->is('/')? 'estas en home':'no lo estas' }} </h1>-->
    	<h1>Error pagina no encontrada</h1>
        <a href="{{route('inicios.index')}}">regresar</a>
        
	</body>
</html>