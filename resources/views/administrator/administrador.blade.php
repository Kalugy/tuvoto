@extends ('layout')

@section('contenido')
<h1>Bienvenido</h1>

	<header>
    		<nav>
    			{{-- intro --}}
    			
    			<h1>$varinicio</h1>
    			<h2>Introduccion</h2>
    			<a class="{{ activemenu('/')}}" href= "{{ route ('introduccion') }}"  >añadir</a>
    			<a class="{{ activemenu('saludos/*') }}" href= "{{ route ('saludos','dan') }}" >Saludo</a>
    			<a class="{{ activemenu('mensajes/create') }}" href= "{{ route('mensajes.create') }}">Contacto</a>
                
    
				

    		</nav>
    </header>
@stop