@extends('layouts.base')

@section('content')
<div class="container">
    @include('menu') <!-- Incluir el menú -->
    
    <!-- Resto del contenido de la vista de usuarios.index -->
</div>
<div class="row">
    <div class="col-12">
        <div>
            <h2>editar usuario</h2>
        </div>
        <div>
            <a href="{{route('usuario.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    
@if ($errors->any())
<div class="alert alert-danger mt-2" >
    <strong>Por las chancas de mi madre!</strong> Algo fue mal..<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <form action="{{route('usuario.update', $usuario)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombres:</strong>
                    <input type="text" name="nombres" class="form-control" placeholder="Nombre del usuario" value="{{$usuario->nombres}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Apellidos: </strong>
                    <input type="text" name="apellidos" class="form-control" placeholder="apellidos del usuario" value="{{$usuario->apellidos}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>correo electronico: </strong>
                    <input type="text" name="email" class="form-control" placeholder="@gmail" value="{{$usuario->email}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>direccion: </strong>
                    <input type="text" name="direccion" class="form-control" placeholder="ubicacion de residencia" value="{{$usuario->direccion}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Telefono: </strong>
                    <input type="number" name="telefono" class="form-control" placeholder="numero telefonico" value="{{$usuario->telefono}}">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Fecha límite:</strong>
                    <input type="date" name="due_date" class="form-control" id="">
                </div>
            </div> --}}
            {{-- <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Estado (inicial):</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">-- Elige el status --</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="En progreso">En progreso</option>
                        <option value="Completada">Completada</option>
                    </select>
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">actualizar</button>
            </div>
        </div>
    </form>
</div>
@endsection