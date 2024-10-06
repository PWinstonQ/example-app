<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tienda - Productos')</title>
    <!-- Cargar estilos -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="#">Categorías</a></li>
                <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                <li><a href="{{ url('/ver-contactos') }}">Ver Contactos</a></li>  <!-- Nuevo enlace para ver contactos -->
                <li><a href="#">Misión - Visión</a></li>
            </ul>
        </nav>
    </header>



    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Tienda. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
