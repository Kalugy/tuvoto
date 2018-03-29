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
    	 {!!$html!!}

    	 <u1>
    	 	@foreach($consolas as $consola)
    	 		<li>{{$consola}}</li> 
    	 	@endforeach
    	 	

    	 	@forelse($consolas as $consola)
    	 		<li>{{$consola}}</li>
    	 	@empty
    	 	<p>no hay nada</p>
    	 	@endforelse

    	 	@if(count($consolas)===1)
    	 		<p>Solo existe una consola</p>
    	 	@elseif(count($consolas)>1)
    	 		<p>existe mas de una consola</p>
    	 	@endif		

    	 </u1>

    	<header>
    		<nav>
    			<a href= "<?php echo route ('home') ?>"  >inicio</a>
    			<a href= "<?php echo route ('saludos','dan') ?>" >Saludo</a>
    			<a href= "<?php echo route ('contactos') ?>">Contacto</a>
    		</nav>
    	</header>	
	</body>
</html>