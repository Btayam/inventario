<!-- resources/views/inven/tipos/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos</title>

    <!-- Agregar Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f7f9fc;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #4a69bd;
        }
        .btn-primary {
            background-color: #6a89cc;
            border-color: #4a69bd;
        }
        .btn-primary:hover {
            background-color: #4a69bd;
        }
        .table {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background-color: #6a89cc;
            color: white;
            text-align: center;
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f0f3f7;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .btn-info {
            background-color: #82ccdd;
            border-color: #60a3bc;
        }
        .btn-info:hover {
            background-color: #60a3bc;
        }
        .btn-warning {
            background-color: #f8c291;
            border-color: #e77f67;
        }
        .btn-warning:hover {
            background-color: #e77f67;
        }
        .btn-danger {
            background-color: #e55039;
            border-color: #eb2f06;
        }
        .btn-danger:hover {
            background-color: #eb2f06;
        }
        .record-count {
            font-size: 1rem;
            color: #2d3436;
            font-weight: bold;
        }
        .pagination {
            justify-content: center;
            margin-top: 20px;
        }
        .pagination .page-item .page-link {
            color: #4a69bd;
        }
        .pagination .page-item.active .page-link {
            background-color: #6a89cc;
            border-color: #4a69bd;
        }
        #searchInput {
            border: 2px solid #6a89cc;
            border-radius: 5px;
            width: 970px; /* Establece el ancho en píxeles */
        }

        #searchInput:focus {
            box-shadow: 0 0 5px #4a69bd;
            border-color: #4a69bd;
        }
        /* Sección de botones con estilo más compacto */
        .buttons-section {
            margin-top: 20px;
            position: absolute;
            top: 20px;
            right: 0;
            width: 250px;
            background-color: #ffffff;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .manual-section h5 {
            font-size: 16px;
            color: #4a69bd;
            margin-bottom: 10px;
        }
        .manual-section p {
            font-size: 14px;
            color: #2d3436;
            margin-bottom: 15px;
        }
        .manual-section .btn {
            width: 100%;
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Incluir Menú Superior -->
    @include('layouts.navbar')

    <div class="container mt-4">
        <h1 class="mb-4">Tipos</h1>

        <!-- Crear Nuevo Tipo -->
        <a href="{{ route('tipos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Tipo</a>

        <!-- Barra de búsqueda -->
        <input type="text" id="searchInput" class="form-control mb-3" placeholder="Buscar por nombre" onkeyup="searchTable()">

        <!-- Mostrar el total de registros -->
        <div class="record-count">
            <strong>Total de Registros:</strong> {{ $tipos->total() }}
        </div>

        <div class="d-flex justify-content-between">
            <!-- Tabla de Tipos -->
            <table class="table table-sm table-bordered table-striped" style="width: 75%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Observación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tipos as $tipo)
                        <tr>
                            <td>{{ $tipo->id }}</td>
                            <td>{{ $tipo->nombre }}</td>
                            <td>{{ $tipo->observacion }}</td>
                            <td>
                                <a href="{{ route('tipos.show', $tipo->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('tipos.edit', $tipo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('tipos.destroy', $tipo->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Sección de botones a la derecha -->
            <div class="buttons-section">
                <div class="manual-section">
                    <h5>Manual Rápido</h5>
                    <p>Accede y gestiona las variables maestras y datos clave.</p>
                    <a href="#" class="btn btn-success">Ver Asignaciones</a>
                    <a href="#" class="btn btn-primary">Ver Referencias</a>
                    <a href="#" class="btn btn-warning">Ver Compras</a>
                    <a href="#" class="btn btn-danger">Ver Activos</a>
                </div>
            </div>
        </div>

        <!-- Paginación -->
        <div class="d-flex justify-content-center mt-3">
            {{ $tipos->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <!-- Incluir script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para búsqueda y confirmación de eliminación -->
    <script>
        // Función para buscar en la tabla
        function searchTable() {
            let input = document.getElementById('searchInput');
            let filter = input.value.toLowerCase();
            let rows = document.querySelectorAll('.table tbody tr');

            rows.forEach(function(row) {
                let td = row.getElementsByTagName('td');
                let text = '';
                for (let i = 0; i < td.length - 1; i++) {
                    text += td[i].textContent.toLowerCase() + ' ';
                }
                row.style.display = text.includes(filter) ? '' : 'none';
            });
        }

        // Función para confirmar la eliminación
        function confirmDelete() {
            return confirm('¿Estás seguro de que deseas eliminar este tipo?');
        }
    </script>
</body>
</html>
