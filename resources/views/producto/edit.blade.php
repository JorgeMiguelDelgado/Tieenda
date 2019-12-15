@extends('layouts.layout')

@section('title', 'Editar Productos')

@section('titulo', 'Editar Productos')

@section('contenido')
    <h2>George'Store
        <small class="text-muted">Editar Productos</small>
    </h2>
    <div class="container">
        <form class="form-group" method="POST" action="{{ route('producto.update', $producto) }}">
            @csrf @method('PATCH')
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                <input name="email" type="text"  class="form-control" value="{{old('email', $producto->email)}}">
                </div>
            </div>  
            <div class="form-group row">
                <label for="codigo" class="col-sm-2 col-form-label">Codigo:</label>
                <div class="col-sm-10">
                <input name="codigo" type="text"  class="form-control" value="{{old('codigo', $producto->codigo)}}">
                </div>
            </div>   
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input name="nombre" type="text" class="form-control" value="{{old('nombre', $producto->nombre)}}">
                </div>
            </div> 
            <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label">Cantidad:</label>
                <div class="col-sm-10">
                    <input name="cantidad" type="text" class="form-control" value="{{old('cantidad', $producto->cantidad)}}">
                </div>
            </div> 
            <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                <div class="col-sm-10">
                    <input name="descripcion" type="text" class="form-control" value="{{old('descripcion', $producto->descripcion)}}">
                </div>
            </div> 
            <div class="form-group row">
                <label for="estado" class="col-sm-2 col-form-label">Estado:</label>
                <div class="col-sm-10">
                    <input name="estado" type="text" class="form-control" value="{{old('estado', $producto->estado)}}">
                </div>
            </div> 
            <button type="submit" class="btn btn-outline-primary">Guardar</button> 
        </form>
    </div>
@endsection