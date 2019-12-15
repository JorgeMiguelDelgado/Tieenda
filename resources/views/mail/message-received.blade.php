@extends('layouts.layout')

@section('title', 'Mensaje Enviado')

@section('titulo', 'MEnsaje Enviado')

@section('contenido')>
<body>
    <p>Mensaje Recibido de: {{ $msg['name']}}-{{ $msg['email']}}</p>
    <p><strong>Asunto</strong>{{$msg['subject']}}</p>
    <p><strong>Contenido</strong>{{$msg['content']}}</p>
    
@endsection