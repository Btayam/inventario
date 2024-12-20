<!-- resources/views/inven/tipos/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Tipo</title>

    <!-- Agregar Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        .container {
            max-width: 600px;
        }
        .btn {
            border-radius: 5px;
            padding: 5px 10px;
        }
        .card-header {
            background-color: #6c757d;
            color: white;
        }
        .card-body {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <!-- Incluir Menú Superior -->
    @include('layouts.navbar')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h1>Detalles del Tipo</h1>
            </div>
            <div class="card-body">
                <!-- Mostrar ID, Nombre y Observación -->
                <p><strong>ID:</strong> {{ $tipo->id }}</p>
                <p><strong>Nombre:</strong> {{ $tipo->nombre }}</p>
                <p><strong>Observación:</strong> {{ $tipo->observacion }}</p>

                <a href="{{ route('tipos.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>

    <!-- Incluir script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
