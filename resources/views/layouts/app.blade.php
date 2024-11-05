<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CDN de Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Ruta al archivo CSS en Laravel -->
    <link rel="stylesheet" href="{{ asset('css/styles_Inicio.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_carousel.css') }}" />

    <title>@yield('title', 'Turista sin Maps')</title>
</head>

<body>
    <nav>
        <div class="nav__logo"><a href="/">Turista sin Maps</a></div>
        <ul class="nav__links">
            <a href="{{ route('inicio') }}">Home</a>
            <a href="{{ route('faqs') }}">FAQ's</a>
            <a href="{{ route('comparar') }}">Comparaciones</a>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('perfil') }}">Perfil</a>
        </ul>
    </nav>

    @yield('content')

    <footer>
        <div class="section__container">
            <h4>Turista sin Maps</h4>
            <div class="social__icons">
                <span><i class="ri-facebook-fill"></i></span>
                <span><i class="ri-twitter-fill"></i></span>
                <span><i class="ri-instagram-line"></i></span>
                <span><i class="ri-linkedin-fill"></i></span>
            </div>
            <p>Travel makes one modest. You see what a tiny place you occupy in the world.</p>
        </div>
    </footer>

    @stack('scripts')
</body>

</html>