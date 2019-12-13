
@extends('layouts.layout')

@section('title', 'Categoria de Instrumentos Musicales')

@section('titulo', 'Edicion de las categorias de los instrumentos musicales')

@section('contenido')
    <h2>George'Store
        <small class="text-muted">Edicion del tipo de instrumento musical</small>
    </h2>
    <form class="form-group" method="POST" action="{{ route('categoria.update', $categoria) }}">
            @csrf @method('PATCH')
    <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                <div class="col-sm-10">
                    <input name="tipo" type="text" class="form-control" value="{{old('tipo', $categoria->tipo)}}">
                </div>
            </div> 
    <button type="button">Editar</button>
    </form>
@endsection