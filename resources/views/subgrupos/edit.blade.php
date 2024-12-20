<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Subgrupo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <div class="container mt-4">
        <h1 class="mb-4">Editar Subgrupo</h1>

        <form action="{{ route('subgrupos.update', $subgrupo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $subgrupo->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="observacion" class="form-label">Observación</label>
                <textarea class="form-control" id="observacion" name="observacion">{{ $subgrupo->observacion }}</textarea>
            </div>

            <div class="mb-3">
                <label for="id_tipos" class="form-label">Tipo</label>
                <select class="form-select" id="id_tipos" name="id_tipos" required>
                    
                    @foreach ($tipos as $tipo)
                        <option value="{{ $tipo->id }}" {{ $subgrupo->id_tipos == $tipo->id ? 'selected' : '' }}>{{ $tipo->nombre }}</option>
                    @endforeach 
                   
                </select>
            </div>

            <div class="mb-3">
                <label for="id_lineas" class="form-label">Línea</label>
                <select class="form-select" id="id_lineas" name="id_lineas" required>
                    @foreach ($lineas as $linea)
                        <option value="{{ $linea->id }}" {{ $subgrupo->id_lineas == $linea->id ? 'selected' : '' }}>{{ $linea->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_grupo" class="form-label">Grupo</label>
                <select class="form-select" id="id_grupo" name="id_grupo" required>
                    @foreach ($grupos as $grupo)
                        <option value="{{ $grupo->id }}" {{ $subgrupo->id_grupos == $grupo->id ? 'selected' : '' }}>{{ $grupo->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="{{ route('subgrupos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

