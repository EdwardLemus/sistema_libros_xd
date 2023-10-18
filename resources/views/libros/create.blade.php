@extends('layouts.base')

@section('content')
<div class="container">
    @include('menu') <!-- Incluir el menú -->
    
    <!-- Resto del contenido de la vista de usuarios.index -->
</div>
<div class="row">
    <div class="col-12">
        <div>
            <h2>REGISTRAR LIBRO</h2>
        </div>
        <div>
            <a href="{{route('libro.index')}}" class="btn btn-primary">Volver</a>
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

    <form action="{{route('libro.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>titulo:</strong>
                    <input type="text" name="titulo" class="form-control"  >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>autor: </strong>
                    <input type="text" name="autor" class="form-control"  >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>editorial: </strong>
                    <input type="text" name="editorial" class="form-control"  >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>genero: </strong>
                    <input type="text" name="genero" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Fecha de publicacion:</strong>
                    <input type="date" name="fecha_publicacion" class="form-control" id="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>stock: </strong>
                    <input type="number" name="stock" class="form-control" >
                </div>
            </div>
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