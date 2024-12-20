<!-- resources/views/inven/lineas/edit.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Línea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <div class="container mt-4">
        <h1>Editar Línea</h1>

        <form action="{{ route('lineas.update', $linea->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="linea" class="form-label">Línea:</label>
                <input type="text" class="form-control" id="linea" name="linea" value="{{ old('linea', $linea->nombre) }}" required>
            </div>

            <div class="mb-3">
                <label for="tipo_id" class="form-label">Tipo:</label>
                <select class="form-control" id="tipo_id" name="tipo_id" required>
                    <option value="">Seleccionar Tipo</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id }}" {{ $tipo->id == $linea->tipo_id ? 'selected' : '' }}>
                            {{ $tipo->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="observacion" class="form-label">Observación:</label>
                <textarea class="form-control" id="observacion" name="observacion">{{ old('observacion', $linea->observacion) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

        <a href="{{ route('lineas.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
