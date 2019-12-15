@extends('layouts.layout')

@section('title', 'Editar Productos')

@section('titulo', 'Editar Productos')

@section('contenido')
<br>
<br>

<h2>Edicion de productos 
        <small class="text-muted">Detalles de Productos</small>
    </h2>
   <div class="container"><br>
    
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Codigo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Imagen</th>
                <th scope="col">Estado</th>
                          
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        
            @foreach ($productos as $producto)                      
                    <tr>
                    <th scope="row">{{$producto->id}}</th>
                        <td>{{$producto->cantidad}}</td>
                        <td>{{$producto->estado}}</td>
                        
                @foreach ($categorias as $categoria)
                        @if($producto->id_categoria == $categoria->id)
                            <td>{{$categoria->tipo}}</td>
                        @endif
                        @endforeach
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->cantidad}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{$producto->imagen}}</td>
                        <td>{{$producto->estado}}</td>
                        <td>
                        <a href="{{ route('producto.edit', $producto) }}" class="active">Editar</a>                    
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection