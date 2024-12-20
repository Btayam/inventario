<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Grupo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <div class="container mt-4">
        <h1>Detalles del Grupo</h1>

        <div class="mb-3">
            <strong>Nombre:</strong> {{ $grupo->nombre }}
        </div>
        <div class="mb-3">
            <strong>Línea:</strong> {{ $grupo->linea->nombre }} <!-- Relación con 'linea' -->
        </div>
        <div class="mb-3">
            <strong>Observación:</strong> {{ $grupo->observacion }}
        </div>

        <a href="{{ route('grupos.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
