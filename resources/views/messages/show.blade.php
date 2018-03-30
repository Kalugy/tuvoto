@extends ('layout')

@section('contenido')
<h1>Enviado por {{$mensaje->nombre}}{{$mensaje->email}} </h1>

@stop