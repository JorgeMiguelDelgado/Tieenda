@extends('layout.layout')
@section('title','Registro de Productos')
@section('titulo','Registrar producto')
@section('contenido')
<h1>
<small class="text-muted">Registro de Nuevos productos</small>
    </h1>
    <div class="container">
        <form class="form-group" method="POST" action="{{ route('producto.store') }}">
            @csrf
            <div class="form-group row">
                <label for="nombre"  class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre de producto">
                </div>
            </div>  
            <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                <div class="col-sm-10">
                    <input name="descripcion" type="text" class="form-control" placeholder="Descripcion del producto">
                </div>
            </div>  
            <div class="form-group row">
                <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                    <input name="precio" type="text" class="form-control" placeholder="Precio del producto">
                </div>
                
            <div class="form-group row">
                <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
                <div class="col-sm-10">
                    <input name="cantidad" type="text" class="form-control" placeholder="Cnatidad de productos">
                </div>
            </div> 
            <button type="submit" class="btn btn-outline-primary">Guardar</button> 
        </form>
    </div>
@endsection