<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta tags para la codificación de caracteres y la visualización adecuada en dispositivos móviles -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Meta tag de CSRF para la protección contra ataques de falsificación de solicitudes entre sitios -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Título de la página, configurado con el nombre de la aplicación -->
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Enlace para cargar fuentes de texto desde Bunny Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts necesarios para el proyecto, cargados con Vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Estilos de Livewire, necesarios para que los componentes de Livewire funcionen correctamente -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <!-- Componente de banner, se renderiza en la parte superior de la página -->
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            <!-- Menú de navegación, componente Livewire que se renderiza aquí -->
            @livewire('navigation-menu')

            <!-- Si existe un encabezado definido, se muestra aquí -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <!-- El contenido del encabezado se inyecta en esta parte -->
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Contenido principal de la página -->
            <main>
                <!-- El contenido dinámico de la página (slot) se inyecta aquí -->
                {{ $slot }}
            </main>
        </div>

        <!-- Sección para apilar modales o componentes adicionales de Livewire -->
        @stack('modals')

        <!-- Scripts de Livewire, necesarios para el funcionamiento de los componentes dinámicos -->
        @livewireScripts
    </body>
</html>


