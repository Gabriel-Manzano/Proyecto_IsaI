<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <script src="{{ asset('js/search.js') }}"></script>
    <!-- CDN de Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Archivos CSS específicos -->
    @stack('styles')

    <title>@yield('title') - TURISTA SIN MAPS</title>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="nav__logo"><a href="/">Turista sin Maps</a></div>
        <ul class="nav__links">
            <a href="{{ route('inicio') }}">Home</a>
            <a href="{{ route('faqs') }}">FAQ's</a>
            <!-- <a href="{{ route('comparar') }}">Comparaciones</a> -->
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('perfil') }}">Perfil</a>
            <a href="{{ route('busqueda') }}">Búsqueda Avanzada</a>
            <a href="{{ route('carrito.ver') }}" class="nav-link">
                🛒 Carrito <span class="badge bg-secondary">{{ session('carrito') ? count(session('carrito')) : 0 }}</span>
            </a>
            
        </ul>
    </nav>

    <!-- Contenido de cada vista -->
    <main>
        @yield('content')
    </main>



    <!-- Scripts personalizados -->
    @stack('scripts')

</body>
<!-- Footer -->
<footer>
    <div class="section__container">
        <h4>Turista sin Maps</h4>
        <div class="social__icons">
            <span><i class="ri-facebook-fill"></i></span>
            <span><i class="ri-twitter-fill"></i></span>
            <span><i class="ri-instagram-line"></i></span>
            <span><i class="ri-linkedin-fill"></i></span>
        </div>
    </div>
</footer>

</html>