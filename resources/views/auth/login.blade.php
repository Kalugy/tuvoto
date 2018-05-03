{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}


{{-- ventana de login --}}
@extends ('layout')

@section('contenido')


	<div class="container" style="background-color: #eee; padding: 90px 0px 90px 0px ;" > 
	
	<div class="blockquote text-center" >
	  <h1 class="display-3">Login</h1>
	</div>

	<form method="POST" action="/login">
		{!!csrf_field()!!}
		<blockquote class="blockquote text-center"  ">
		<input type="name" name="name" placeholder="Usuario">
		<p> </p>
		<input type="password" name="password" placeholder="Password">
		<p> </p>

		<p><input class="btn btn-primary " type="submit" name="Enviar"></p>
		</blockquote>
	</form>

</div>


	
@stop


