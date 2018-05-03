<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Tuvoto</title>

    
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="author" content=""> --}}

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}


    <link rel="icon" type="images/png" href="images/Captura.png" />
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <style type="text/css">
    body{
      /*background-color: black;*/
      /*background-image: url('/images/Poly.png';);*/
       /* La página de fondo será negra */
      /* Margin bottom by footer height */
        /*margin: 0;
        margin-bottom: 40px;*/
      
    }  
    .body{
      background-color: black; 

      background-image: url('/images/Poly.png');
      /* Margin bottom by footer height */
        /*margin: 0;
        margin-bottom: 40px;*/
      /*background-image: url('/images/Poly.png';);*/
    }  
    /*html {
    min-height: 100%;
    position: relative;
    }*/

    #fondoprincipal{

      margin-top: 95px;
      border-width: 50px; 
      margin-bottom: 30px; 
      
      border-radius: 15px 10px;  
      border-color: #000000; 
      padding: 10px;
      background-color: grey;
      border: 1px solid grey;
      box-shadow: 10px 20px 40px grey, 0 0 10px black;
      
    }

    #fondo{

      margin-top: 30px;
      border-width: 50px; 
      margin-bottom: 30px; 
      
      border-radius: 15px 10px;  
      border-color: #000000; 
      padding: 10px;
      background-color: #CCCCFF;border: 1px solid grey;
      box-shadow: 10px 20px 40px grey, 0 0 10px black;
      padding: 70px;

    }
    #fondodivmenu{
      border-top-left-radius: 5px; 
      border-color: #000000; 
      background-color: #eee;border: 1px solid black;
      /*box-shadow: 10px 20px 40px grey, 0 0 10px black;*/
      
    }
    #fondodivcentral{

      background-color: blue;
      border: 1px solid black;
      border-color: black; 
      padding: 10px;
      border-width: 50px; 
    }
    

    footer{

      
      text-align: center;

    }

    #submenu01 {

    float: right;
    text-align: center;
    color: white;

    }
    
    
    
    </style>
    
  </head>
  <body class="body"  >

      <nav class="navbar fixed-top navbar-dark bg-dark">
  

          
    
      <div class="row">
        <div class="col">

        <a class="navbar-brand" href="{{URL::to('/')}}">
            <img src={{asset('images/Captura.png')}} width="80" height="80" class="d-inline-block align-center" alt="Logo" >
                Tu voto, tu candidato, tu decides!</a>



        </div>

        <div class="col">
         </div>
      
         {{-- <a class="navbar-brand active pull-xs-right"> --}}
        {{-- pull-xs-right --}}
         </div>

              @if(auth()->check())
                      <a class="nav-link active text-black"  href= "\logout">Cerrar sesion de <i class="glyphicon glyphicon-user">{{auth()->user()->name }}</i></a>
                      {{-- <a class="{{ activemenu('mensajes') }}" href= "{{ route('mensajes.index') }}">Mensaje</a> --}}
                      
              @endif
              @if(auth()->guest())
                           
                          <a class="nav-link active text-black" href= "{{ "/login" }}">Login</a>
                          
              @endif
         
        
</nav>
  

        <div class="container" id="fondoprincipal">
      
        
        

        @yield('contenido')

        
        
         {{-- <footer>
          <div class="container" id="fondo">
            Derechos reservados
          </div>  
          
        </footer> --}}
        
       
        
       
        
        {{-- <div class="container-fluid" id="fondoprincipal">
          hola
        </div> --}}
        

        <nav class="navbar navbar-dark bg-dark">
          <a class="navbar-brand " >Derechos reservados</a>
        </nav>
      

 </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
  </body>
  
  



  
</html>