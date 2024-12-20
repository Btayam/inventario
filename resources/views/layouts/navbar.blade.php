<!-- resources/views/layouts/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(90deg, #004d99, #0073e6); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}" style="font-weight: bold; font-size: 1.2rem; color: #ffffff;">INICIO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('tipos.index') ? 'active' : '' }}" href="{{ route('tipos.index') }}">Tipos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('lineas.index') ? 'active' : '' }}" href="{{ route('lineas.index') }}">Lineas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('grupos.index') ? 'active' : '' }}" href="{{ route('grupos.index') }}">Grupos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('subgrupos.index') ? 'active' : '' }}" href="{{ route('subgrupos.index') }}">SubGrupos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Agregar estilos personalizados -->
<style>
    .navbar {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar-nav .nav-link {
        transition: all 0.3s ease;
        padding: 10px 15px;
        color: #e6f7ff;
        font-weight: 500;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-item.active .nav-link {
        background-color: #0056b3;
        border-radius: 5px;
        color: white;
    }

    .navbar-nav .nav-link.active {
        color: #ffffff;
        font-weight: bold;
        background-color: #003366;
        border-radius: 5px;
    }

    .navbar-toggler {
        border-color: #e6f7ff;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%288, 123, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
</style>
