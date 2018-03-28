<!doctype html>
<html lang="en">
  <head>
	<title>saludo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

  </head>
    <body>

    	<h1>Saludo <?php echo $nombre?></h1>
    	<h1>Saludo {{$nombre}} </h1>
    	<header>
    		<nav>
    			<a href= "<?php echo route ('home') ?>"  >inicio</a>
    			<a href= "<?php echo route ('saludos','dan') ?>" >Saludo</a>
    			<a href= "<?php echo route ('contactos') ?>">Contacto</a>
    		</nav>
    	</header>	
	</body>
</html>