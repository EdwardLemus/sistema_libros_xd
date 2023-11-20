<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Mi Aplicación</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('usuario.index') }}">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('libro.index') }}">Libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('prestamos.index') }}">Préstamos</a>
            </li>
        </ul>
    </div>
</nav>
