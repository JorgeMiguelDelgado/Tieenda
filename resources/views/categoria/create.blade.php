@extends('layouts.layout')
@section('title','Formulario de Categorias de Productos')
@section('titulo','Registrar formulario')
@section('contenido')
<h1>
<small class="text-muted">Registro de Nuevos productos</small>
    </h1>
    <div class="container">
        <form class="form-group"  method="POST" action="{{ route('categoria.store') }}">
            @csrf
            <div class="form-group row">
                <label for="tipo"  class="col-sm-2 col-form-label">Tipo de instrumento:</label>
                <div class="col-sm-10">
                    <input name="tipo" type="text" class="form-control" placeholder="Categoria de instrumento">
                </div>
            </div>  
            
            <button type="submit" class="btn btn-outline-primary">Guardar</button> 
        </form>
    </div>

@endsection