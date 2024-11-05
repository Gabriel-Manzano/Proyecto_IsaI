<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CDN de Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Ruta al archivo CSS en Laravel -->
    <link rel="stylesheet" href="{{ asset('css/styles_Inicio.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_perfil.css') }}">

    <title>Perfil de Usuario - TURISTA SIN MAPS</title>
</head>

<body>
    <!-- Navbar -->
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

    <!-- Header -->
    <header>
        <h2>Perfil de Usuario</h2>
        <p>Gestiona tus reservas, guarda hoteles favoritos y actualiza tus preferencias.</p>
    </header>

    <!-- Contenido principal del perfil de usuario -->
    <div class="profile-container">
        <!-- Sección de datos personales -->
        <section class="personal-info">
            <h3>Datos Personales</h3>
            <form>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" placeholder="Tu nombre completo" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>

                <label for="preferences">Preferencias:</label>
                <textarea id="preferences" name="preferences"
                    placeholder="Describe tus preferencias de viaje..."></textarea>

                <button type="submit">Actualizar Información</button>
            </form>
        </section>

        <!-- Sección de reservas -->
        <section class="reservations">
            <h3>Tus Reservas</h3>
            <div class="reservations-list">
                <div class="reservation-item">
                    <p><strong>Hotel Paradise</strong> - Cancún</p>
                    <p>Fecha de Check-in: 20/11/2024</p>
                    <button>Cancelar Reserva</button>
                </div>
                <div class="reservation-item">
                    <p><strong>Montaña Retreat</strong> - Colorado</p>
                    <p>Fecha de Check-in: 15/12/2024</p>
                    <button>Cancelar Reserva</button>
                </div>
                <!-- Más reservas según sea necesario -->
            </div>
        </section>

        <!-- Sección de hoteles favoritos -->
        <section class="favorites">
            <h3>Hoteles Favoritos</h3>
            <div class="favorites-list">
                <div class="favorite-item">
                    <p><strong>Urban Stay</strong> - Ciudad de México</p>
                    <button>Eliminar de Favoritos</button>
                </div>
                <div class="favorite-item">
                    <p><strong>Playa Beach Hotel</strong> - Miami</p>
                    <button>Eliminar de Favoritos</button>
                </div>
                <!-- Más favoritos según sea necesario -->
            </div>
        </section>
    </div>

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
            <p>
                Travel makes one modest. You see what a tiny place you occupy in the world.
            </p>
        </div>
    </footer>

</body>

</html>