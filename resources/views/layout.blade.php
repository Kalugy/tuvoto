<!doctype html>
<html lang="en">
  <head>
	<title>Mi sitio</title>


    <style>
        .active{
        text-decoration: none;
        color: green;
    }

    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">

  </head>
    <body>
        <!--<h1> {{ request()->is('/')? 'estas en home':'no lo estas' }} </h1>-->
        <?php function activemenu($url){

            return request()->is($url)? 'active':'' ;
        } ?>

    	<header>
    		<nav>
    			<a class="{{ activemenu('/')}}" href= "{{ route ('home') }}"  >inicio</a>
    			<a class="{{ activemenu('saludos/*') }}" href= "{{ route ('saludos','dan') }}" >Saludo</a>
    			<a class="{{ activemenu('contactanos') }}" href= "{{ route ('contactos') }}">Contacto</a>
    		</nav>
    	</header>	

        @yield('contenido')
        <footer>Derechos reservados{{date('Y')}}</footer>

	</body>
</html>