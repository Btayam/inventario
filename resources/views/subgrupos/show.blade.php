<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Subgrupo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <div class="container mt-4">
        <h1 class="mb-4">Detalles del Subgrupo</h1>

        <div class="mb-3">
            <strong>Nombre:</strong> {{ $subgrupo->nombre }}
        </div>

        <div class="mb-3">
            <strong>Tipo:</strong> {{ $subgrupo->tipo->nombre }}
        </div>

        <div class="mb-3">
            <strong>Línea:</strong> {{ $subgrupo->linea->nombre }}
        </div>

        <div class="mb-3">
            <strong>Grupo:</strong> {{ $subgrupo->grupo->nombre }}
        </div>

        <div class="mb-3">
            <strong>Subgrupo Padre:</strong> {{ $subgrupo->subgrupoPadre->nombre ?? 'Sin subgrupo' }}
        </div>

        <div class="mb-3">
            <strong>Observación:</strong> {{ $subgrupo->observacion }}
        </div>

        <a href="{{ route('subgrupos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</body>
</html>
