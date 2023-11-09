@extends('layouts.base')

@section('content')
<div class="row">
    <div class="container">
        @include('menu') <!-- Incluir el menú -->
        
        <!-- Resto del contenido de la vista de usuarios.index -->
    </div>
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Prestamos</h2>
        </div>
        <div>
            <a href="{{ route('prestamos.create') }}" class="btn btn-primary">Crear Préstamo</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Nombre del Usuario</th>
                <th>Titulo del Libro</th>
                <th>Fecha de Préstamo</th>
                <th>Fecha de Devolución</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            @foreach ($prestamos as $prestamo)
                <tr>
                    <td class="fw-bold">{{ $prestamo->id_usuario }}</td>
                    <td>{{ $prestamo->id_libro }}</td>
                    <td>{{ $prestamo->fecha_prestamo }}</td>
                    <td>{{ $prestamo->fecha_devolucion }}</td>
                    <td>{{ $prestamo->status }}</td>
                    <td>
                        <a href="{{ route('prestamos.edit', $prestamo->id) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('prestamos.destroy', $prestamo->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $prestamos->links() }}
    </div>
</div>
@endsection
