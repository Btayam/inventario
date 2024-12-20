
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Inventario de productos" />
    <meta name="author" content="Tu nombre" />
    <title>INVENTARIO</title>

    <!-- Consolidación de recursos CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" />
                </a>
            </div>

            <div class="right-div">
                <a href="#" class="btn btn-danger pull-right">LOG ME OUT</a>
            </div>
        </div>
    </nav>

    <!-- Main content wrapped in Laravel layout component -->
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Dashboard') }}</h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <x-welcome />
                </div>
            </div>
        </div>
    </x-app-layout>

    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                   &copy; 2024 Yourdomain.com | <a href="http://www.binarytheme.com/" target="_blank" rel="noopener noreferrer">Designed by: binarytheme.com</a> 
                </div>
            </div>
        </div>
    </footer>

    <!-- Script optimizations -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</body>
</html>
