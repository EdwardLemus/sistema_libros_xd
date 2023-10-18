@extends('layouts.base')

@section('content')
<div class="container">
    @include('menu') <!-- Incluir el menú -->
    
    <!-- Resto del contenido de la vista de usuarios.index -->
</div>
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">REGISTRO DE LIBROS</h2>
        </div>
        <div>
            <a href="{{route('libro.create')}}" class="btn btn-primary">Crear tarea</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{Session::get('success')}}<br>
        </div>        
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>titulo</th>
                <th>autor</th>
                <th>editorial</th>
                <th>genero</th>
                <th>publicacion</th>
                <th>stock</th>
                <th>acciones</th>
            </tr>
            @foreach ($libros as $libro)
            <tr>
                <td class="fw-bold">{{$libro->titulo}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->editorial}}</td>
                <td>{{$libro->genero}}</td>
                <td>{{$libro->fecha_publicacion}}</td>
                <td>{{$libro->stock}}</td>
                <td>
                    <a href="{{route('libro.edit', $libro)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('libro.destroy', $libro)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{$libros->links()}}
    </div>
</div>
@endsection