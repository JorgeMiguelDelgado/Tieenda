@extends('layouts.layout')

@section('title', 'Categoría de Instumentos')

@section('Titulo', 'Categoría de Instrumentos')

@section('contenido')
    <h2>George'Store
        <small class="text-muted">Detalles de Categoría de Instrumentos</small>
    </h2>
    <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="{{ route('categoria.create') }}">Categorias de Instrumentos Musicales</a></button>
    <div class="container"><br>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha</th>
                <th scope="col"></th>            
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>
            <th scope="row">{{$categoria->id}}</th>
                <td>{{$categoria->tipo}}</td>
                <td>{{$categoria->created_at}}</td>
                <td>
                <a href="{{ route('categoria.edit', $categoria) }}" class="active">Editar</a>                    
                </td>                
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection