<!doctype html>
<html lang="en">
  <head>
	<title>Introduccion</title>

    {{-- <link rel="stylesheet" type="text/css" href="/css/app.css"> --}}
    
    <!-- Required meta tags -->
    <meta charset="utf-8">

  </head>
    <body>
        <!--<h1> {{ request()->is('/')? 'estas en home':'no lo estas' }} </h1>-->
        <?php function activemenu($url){

            return request()->is($url)? 'active':'' ;
        } ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
      
    </ul>
    
  </div>
</nav>
        
    	<header>
    		<nav>
    			<a class="{{ activemenu('/')}}" href= "{{ route ('introduccion') }}"  >introduccion</a>
    			<a class="{{ activemenu('saludos/*') }}" href= "{{ route ('saludos','dan') }}" >Saludo</a>
    			<a class="{{ activemenu('mensajes/create') }}" href= "{{ route('mensajes.create') }}">Contacto</a>
                
                @if(auth()->check())
                    <a href= "\logout">Cerrar sesion de {{auth()->user()->name }}</a>
                    <a class="{{ activemenu('mensajes') }}" href= "{{ route('mensajes.index') }}">Mensaje</a>
                @endif
                @if(auth()->guest())
                    <a class="{{ activemenu('login') }}" href= "{{ "/login" }}">Login</a>
                @endif
    		</nav>
    	</header>	

        @yield('contenido')
        <footer>Derechos reservados{{date('Y')}}</footer>

	</body>
</html>