<!doctype html>
<html lang="en">
  <head>
	<title>Introduccion</title>

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <style>
    .active{

    color:white;
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

       
         <a class="{{ activemenu('mensajes/create') }}" href= "{{ route('mensajes.create') }}">Contacto</a>
        <div class="container">
        @if(auth()->check())
                    <a href= "\logout">Cerrar sesion de {{auth()->user()->name }}</a>
                    {{-- <a class="{{ activemenu('mensajes') }}" href= "{{ route('mensajes.index') }}">Mensaje</a> --}}
        @endif
        @if(auth()->guest())
                    <a class="{{ activemenu('login') }}" href= "{{ "/login" }}">Login</a>
        @endif

        @yield('contenido')


        

        <footer>Derechos reservados{{date('Y')}}</footer>

        </div>
        

	</body>
</html>