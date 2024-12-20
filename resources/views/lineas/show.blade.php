<!-- resources/views/inven/lineas/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Línea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <div class="container mt-4">
        <h1>Detalles de la Línea</h1>

        <p><strong>ID:</strong> {{ $linea->id }}</p>
        <p><strong>Línea:</strong> {{ $linea->nombre }}</p>
        <p><strong>Tipo:</strong> {{ $linea->tipo->nombre }}</p>
        <p><strong>Observación:</strong> {{ $linea->observacion }}</p>

        <a href="{{ route('lineas.index') }}" class="btn btn-secondary">Volver</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
