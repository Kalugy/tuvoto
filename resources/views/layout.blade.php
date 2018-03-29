<!doctype html>
<html lang="en">
  <head>
	<title>Mi sitio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

  </head>
    <body>

    	<header>
    		<nav>
    			<a href= "<?php echo route ('home') ?>"  >inicio</a>
    			<a href= "<?php echo route ('saludos','dan') ?>" >Saludo</a>
    			<a href= "<?php echo route ('contactos') ?>">Contacto</a>
    		</nav>
    	</header>	

        @yield('contenido')
        <footer>Derechos reservados{{date('Y')}}</footer>

	</body>
</html>