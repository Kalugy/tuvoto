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
    			<a class="{{ activemenu('/')}}" href= "{{ route ('introduccion') }}"  >introduccion</a>
    			<a class="{{ activemenu('saludos/*') }}" href= "{{ route ('saludos','dan') }}" >Saludo</a>
    			<a class="{{ activemenu('mensajes/create') }}" href= "{{ route('mensajes.create') }}">Contacto</a>
                <a class="{{ activemenu('mensajes') }}" href= "{{ route('mensajes.index') }}">Mensaje</a>
                @if(auth()->check())
                <a href= "\logout">Cerrar sesion de {{auth()->user()->name }}</a>
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