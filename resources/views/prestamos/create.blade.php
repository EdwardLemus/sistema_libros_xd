@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>REGISTRAR USUARIO</h2>
        </div>
        <div>
            <a href="{{route('prestamos.index')}}" class="btn btn-primary">Volver</a>
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

    <form action="{{route('prestamos.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombres:</strong>
                    <input type="text" name="nombres" class="form-control"  >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Apellidos: </strong>
                    <input type="text" name="apellidos" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>correo electronico: </strong>
                    <input type="text" name="email" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>direccion: </strong>
                    <input type="text" name="direccion" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Telefono: </strong>
                    <input type="number" name="telefono" class="form-control" >
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
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection