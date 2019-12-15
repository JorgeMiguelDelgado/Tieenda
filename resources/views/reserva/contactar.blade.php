@extends('layouts.layout')
@section('title','Contacte con el Dueño')
@section('ntitle','Rellene el siguiente formulario')
@section('contenido')
<br>
<br>
<br>
<center>
<h1>Atención al cliente</h1>

 <form action="{{ route('contact') }}" method="POST">
 @csrf
<input type="text" placeholder="Nombre" name="name" value="{{ old('name')}}"> <br>
{!! $errors->first('Nombre', '<small>:message</small><br>')!!}

<input type="text" name="email" placeholder="Email" value="{{ old('email')}}"> <br>
{!! $errors->first('email', '<small>:message</small><br>')!!}
 
<input name="subject" placeholder="Asunto..." value="{{ old('subject')}}"><br>
{!! $errors->first('subject', '<small>:message</small><br>')!!}

<textarea name="content" placeholder="Mensaje..."value="{{ old('content')}}"></textarea><br>
{!! $errors->first('content', '<small>:message</small><br>')!!}
<button>Enviar</button>
 </form>
 </center>
@endsection