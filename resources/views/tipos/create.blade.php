<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Tipo</title>

    <!-- Agregar Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
        }
        h1 {
            color: #4a4e69;
        }
        .form-container {
            display: flex;
            gap: 20px;
        }
        .form-section {
            flex: 2;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .buttons-section, .manual-section {
            flex: 1;
            background-color: #e8eaf6;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .buttons-section h5, .manual-section h5 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }
        .buttons-section .btn, .manual-section .btn {
            width: 100%;
            margin-bottom: 15px;
            font-weight: bold;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #aab7b8; /* Gris suave */
            border-color: #aab7b8;
        }
        .btn-warning {
            background-color: #d6d6d6; /* Gris claro */
            border-color: #d6d6d6;
            color: #333;
        }
        .btn-danger {
            background-color: #b7b7b7; /* Gris oscuro */
            border-color: #b7b7b7;
        }
        .btn-success {
            background-color: #27ae60;
            border-color: #27ae60;
        }
        .btn-secondary {
            background-color: #95a5a6;
            border-color: #95a5a6;
        }
        label {
            font-weight: bold;
            color: #34495e;
        }
        input, select, textarea {
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        input:focus, select:focus, textarea:focus {
            border-color: #5dade2;
            box-shadow: 0 0 5px rgba(93, 173, 226, 0.5);
        }
        .manual-section p {
            font-size: 0.9rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')

    <div class="container mt-4">
        <h1 class="mb-4">Crear Nuevo Tipo</h1>

        <div class="form-container">
            <div class="form-section">
                <!-- Formulario para crear tipo -->
                <form action="{{ route('tipos.store') }}" method="POST">
                    @csrf
                    
                    <!-- Campo Nombre -->
                    <div class="form-group mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    
                    <!-- Campo Observación -->
                    <div class="form-group mb-3">
                        <label for="observacion" class="form-label">Observación:</label>
                        <textarea name="observacion" id="observacion" class="form-control"></textarea>
                    </div>
                    
                    <!-- Botón de Enviar -->
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('tipos.index') }}" class="btn btn-secondary">Volver</a>
                </form>
            </div>

            <div class="buttons-section">
                <!-- Manual añadido a la segunda sección -->
                <div class="manual-section">
                    <h5>Manual de Opciones</h5>
                    <p>Esta sección está diseñada exclusivamente para la creación de nuevos datos y variables maestras. Su propósito es permitir la adición rápida de elementos, facilitando el acceso directo a opciones clave a través de rutas rápidas. Utiliza esta sección para agregar información esencial de manera eficiente, sin necesidad de navegar por múltiples pantallas.</p>
                    <a href="{{ route('tipos.create') }}" class="btn btn-success">Crear Tipo</a>
                    <a href="{{ route('grupos.create') }}" class="btn btn-primary">Crear Grupo</a>
                    <a href="{{ route('lineas.create') }}" class="btn btn-warning">Crear Línea</a>
                    <a href="{{ route('subgrupos.create') }}" class="btn btn-danger">Crear SubGrupo</a>
                </div>
            </div>

            <div class="buttons-section">
                <div class="manual-section">
                    <h5>Manual Rápido</h5>
                    <p>Esta sección está diseñada exclusivamente para acceder y gestionar las variables maestras y datos clave. Su propósito es permitir un acceso rápido a los elementos esenciales, facilitando su visualización y administración sin necesidad de navegar entre múltiples pantallas. Utiliza este acceso directo para realizar tareas clave de manera eficiente y rápida.</p>
                    <a href="#" class="btn btn-success">Ver Asignaciones</a>
                    <a href="#" class="btn btn-primary">Ver Referencias</a>
                    <a href="#" class="btn btn-warning">Ver Compras</a>
                    <a href="#" class="btn btn-danger">Ver Activos</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluir script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
