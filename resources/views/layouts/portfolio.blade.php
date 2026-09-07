<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Martín Hernández | Web Developer')</title>
    <meta name="description" content="Portafolio profesional de Martín Hernández, Ingeniero en Sistemas y Web Developer.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Estilos globales -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
    <!-- Aquí se insertará el contenido de cada vista -->
    @yield('content')

    <!-- Scripts globales -->
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
