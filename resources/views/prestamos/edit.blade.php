@extends('layouts.base')

@section('content')
<div class="container">
    @include('menu') <!-- Incluir el menú -->
    
    <!-- Resto del contenido de la vista de usuarios.index -->
</div>
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Editar Préstamo</h2>
        </div>
    </div>

    <div class="col-12 mt-4">
        <form method="POST" action="{{ route('prestamos.update', $prestamo->id) }}">
            @csrf
            @method('PUT') <!-- Usamos el método PUT para actualizar el registro -->

            <div class="mb-3">
                <label for="id_usuario" class="form-label">ID de Usuario</label>
                <select class="form-select" id="id_usuario" name="id_usuario">
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}" {{ $usuario->id == $prestamo->id_usuario ? 'selected' : '' }}>
                            {{ $usuario->id }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_libro" class="form-label">ID del Libro</label>
                <select class="form-select" id="id_libro" name="id_libro">
                    @foreach ($libros as $libro)
                        <option value="{{ $libro->id }}" {{ $libro->id == $prestamo->id_libro ? 'selected' : '' }}>
                            {{ $libro->id }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="fecha_prestamo" class="form-label">Fecha de Préstamo</label>
                <input type="datetime-local" class="form-control" id="fecha_prestamo" name="fecha_prestamo" value="{{ $prestamo->fecha_prestamo }}">
            </div>

            <div class="mb-3">
                <label for="fecha_devolucion" class="form-label">Fecha de Devolución</label>
                <input type="datetime-local" class="form-control" id="fecha_devolucion" name="fecha_devolucion" value="{{ $prestamo->fecha_devolucion }}">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Estado</label>
                <select class="form-select" id="status" name="status">
                    <option value="pendiente" {{ $prestamo->status == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                    <option value="devuelto" {{ $prestamo->status == 'devuelto' ? 'selected' : '' }}>Devuelto</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Préstamo</button>
        </form>
    </div>
</div>
@endsection
