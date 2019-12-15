@extends('layouts.layout')
@section('title','Registro de Productos')
@section('titulo','Registrar producto')
@section('contenido')
<h1>
<small class="text-muted">Registro de Nuevos productos</small>
    </h1>
    <div class="container">
    <div>
        <form class="form-group" file="true" enctype="multipart/form-data" method="POST" action="{{ route('producto.store') }}">
            @csrf
            <div class="form-group row">
                <label for="codigo"  class="col-sm-2 col-form-label">Código:</label>
                <div class="col-sm-10">
                    <input name="codigo" type="text" class="form-control" placeholder="Codigo de Producto">
                </div>
            </div>  
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre de producto">
                </div>
            </div>  
            <div class="form-group row">
                <label for="cantidad" class="col-sm-2 col-form-label">Cantidad:</label>
                <div class="col-sm-10">
                    <input name="cantidad" type="text" class="form-control" placeholder="Cantidad del producto">
                </div>
                <div class="form-group row">
                <label for="categoria" class="col-sm-2 col-form-label">Categoría:</label>
                <div class="col-sm-10">
                    <select name="id_categoria" class="form-control">
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->tipo}}</option>
                        @endforeach
                    </select>
                </div>                
            </div>  
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input name="email" type="text" class="form-control" placeholder="Emailque mas use">
                </div>
            
            <div class="form-group row">
            <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>s
                <div class="col-sm-10">
                    <input name="descripcion" type="text" class="form-control" placeholder="Descripción de productos">
                </div>
            </div> 
            
            <div class="form-group row">
                <label for="file" class="col-sm-2 col-form-label">Imagen</label>
                <div class="col-sm-10">
                    <input class="active" name="imagen" type="file" class="form-control" >
                </div>
            </div> 
            <div class="form-group row">
            <label for="estado" class="col-sm-2 col-form-label">Estado:</label>s
                <div class="col-sm-10">
                    <input name="estado" type="text" class="form-control" placeholder="Estado del producto">
                </div>
            </div>
            <button class="active" type="submit" class="btn btn-outline-primary">Guardar</button> 
        </form>
        </div>
    </div>
@endsection