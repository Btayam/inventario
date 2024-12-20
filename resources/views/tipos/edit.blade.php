<!-- resources/views/inven/tipos/edit.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo</title>

    <!-- Agregar Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        .container {
            max-width: 600px;
        }
        .btn {
            border-radius: 5px;
            padding: 8px 15px;
        }
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <!-- Incluir Menú Superior -->
    @include('layouts.navbar')

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h1>Editar Tipo</h1>
            </div>
            <div class="card-body">
                <!-- Formulario para editar tipo -->
                <form action="{{ route('tipos.update', $tipo->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <!-- Campo Nombre -->
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" value="{{ $tipo->nombre }}" class="form-control" required>
                    </div>
                    
                    <!-- Campo Observación -->
                    <div class="form-group">
                        <label for="observacion">Observación:</label>
                        <textarea name="observacion" id="observacion" class="form-control">{{ $tipo->observacion }}</textarea>
                    </div>
                    
                    <!-- Botón de Enviar -->
                    <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
                </form>
                
                <a href="{{ route('tipos.index') }}" class="btn btn-secondary mt-3">Volver</a>
            </div>
        </div>
    </div>

    <!-- Incluir script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
