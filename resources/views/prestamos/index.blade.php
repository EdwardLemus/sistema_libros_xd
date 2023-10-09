@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">REGISTRO DE USUARIOS</h2>
        </div>
        <div>
            <a href="{{route('usuario.create')}}" class="btn btn-primary">Crear tarea</a>
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
                <th>nombres</th>
                <th>apellidos</th>
                <th>correo</th>
                <th>direccion</th>
                <th>telefono</th>
                <th>acciones</th>
            </tr>
            @foreach ($prestamos as $prestamo)
            <tr>
                <td class="fw-bold">{{$usuario->nombres}}</td>
                <td>{{$usuario->apellidos}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->direccion}}</td>
                <td>{{$usuario->telefono}}</td>
                <td>
                    <a href="{{route('usuario.edit', $usuario)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('usuario.destroy', $usuario)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{$prestamos->links()}}
    </div>
</div>
@endsection