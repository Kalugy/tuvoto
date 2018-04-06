<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Tuvoto</title>

    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    
  </head>
  <body>

    <!--<h1> {{ request()->is('/')? 'estas en home':'no lo estas' }} </h1>-->
        <?php function activemenu($url){

            return request()->is($url)? 'active':'' ;
        } ?>

       
        <nav class="navbar navbar-light bg-secondary">
          <div class="container-fluid">
          
          <ul class="nav justify-content-end">
            <li class="nav-item">
         

              @if(auth()->check())
                      <a class="nav-link active" href= "\logout">Cerrar sesion de <i class="glyphicon glyphicon-user">{{auth()->user()->name }}</a>
                      {{-- <a class="{{ activemenu('mensajes') }}" href= "{{ route('mensajes.index') }}">Mensaje</a> --}}
                      
              @endif
              @if(auth()->guest())
                           
                          <a class="nav-link active text-white" href= "{{ "/login" }}">Login</a>
                          
              @endif


            </li>
            <li class="nav-item">

          </ul>
          </div>
        </nav>
         {{-- <a class="{{ activemenu('mensajes/create') }}" href= "{{ route('mensajes.create') }}">Contacto</a> --}}
        <div class="container">
        

        @yield('contenido')


        
        <blockquote class="blockquote text-center">
        <footer><br><br><br><span style=" font-style: italic;">Derechos reservados{{date('Y')}}</span></br></br></br></footer>
        </blockquote>
        </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
  </body>
</html>