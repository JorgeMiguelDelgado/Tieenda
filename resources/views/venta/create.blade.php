@extends('layouts.layout')
@section('title','Formulario de venta')
@section('titulo','Registrar formulario')
@section('contenido')

<h1>
<small class="text-muted">Registro formulario de ventas</small>
    </h1>
    <div class="container">
        <form class="form-group" method="POST" action="{{ route('venta.store') }}">
            @csrf
            <div class="form-group row">
                <label for="producto"  class="col-sm-2 col-form-label">Producto:</label>
                
                
                @foreach($productos as $producto)
                <div class="col-sm-10">
                    <input name="nombre" type="text" class="form-control" value="{{$producto->nombre}}">
                    
                </div>
                
                @endforeach
            </div>  
            <div class="form-group row">
                <label for="precio" class="col-sm-2 col-form-label">Precio del producto:</label>
                
                <div class="col-sm-10">
                @foreach($productos as $producto)
                <input name="precio" type="text" class="form-control" value="{{$producto->precio}}">
                @endforeach
                </div>
                
            </div> 
             
            <div class="form-group row">
                <label for="cantidad" class="col-sm-2 col-form-label">Cantidad:</label>
                <div class="col-sm-10">
                    <input name="cantidad" type="text" class="form-control" placeholder="Cantidad del producto">
                </div>
                
            <button type="submit" class="btn btn-outline-primary">Guardar</button> 
        </form>
    </div>



@endsection