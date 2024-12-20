<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Grupo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <div class="container mt-4">
        <h1>Editar Grupo</h1>

        <form action="{{ route('grupos.update', $grupo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $grupo->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="id_linea" class="form-label">Línea</label>
                <select class="form-control" id="id_linea" name="id_linea" required>
                    @foreach($lineas as $linea)
                        <option value="{{ $linea->id }}" {{ $grupo->id_linea == $linea->id ? 'selected' : '' }}>{{ $linea->nombre }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="observacion" class="form-label">Observación</label>
                <textarea class="form-control" id="observacion" name="observacion">{{ $grupo->observacion }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Grupo</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
