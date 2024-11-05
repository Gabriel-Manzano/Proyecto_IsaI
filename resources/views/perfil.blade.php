@extends('layouts.plantilla1')

@section('title', 'Inicio')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_Inicio.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_carousel.css') }}" />
@endpush

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CDN de Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Ruta al archivo CSS en Laravel -->
    <link rel="stylesheet" href="{{ asset('css/styles_Inicio.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_perfil.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Perfil de Usuario - TURISTA SIN MAPS</title>
</head>

<body>

    <!-- Header -->
    <header>
        <br>
        <br>
        <br>
        <h2>Perfil de Usuario</h2>
        <p>Gestiona tus reservas, guarda hoteles favoritos y actualiza tus preferencias.</p>
    </header>

    <!-- Contenido principal del perfil de usuario -->
    @session('exito')
        <script>
            Swal.fire({
                title: "¡Datos actualizados con éxito!",
                text: '{{$value}}',
                icon: "success"
            });
        </script>
    @endsession
    <div class="profile-container">
        <!-- Sección de datos personales -->
        <section class="personal-info">
            <h3>Datos Personales</h3>

            <form action="/enviarPerfil" method="POST">

                @csrf

                <label for="name">Nombre:</label>
                <input type="text" id="name" name="txtnameper" placeholder="Tu nombre completo"
                    value="{{ old('txtnameper') }}">
                <small class="fst-italic text-danger">{{$errors->first('txtnameper')}}</small>

                <label for="email">Correo Electrónico:</label>
                <input type="text" id="email" name="txtemailper" placeholder="Tu correo electrónico"
                    value="{{ old('txtemailper') }}">
                <small class="fst-italic text-danger">{{$errors->first('txtemailper')}}</small>

                <label for="preferences">Preferencias:</label>
                <textarea id="preferences" name="txtpreferencesper" placeholder="Describe tus preferencias de viaje..."
                    value="{{ old('txtpreferencesper') }}"></textarea>
                <small class="fst-italic text-danger">{{$errors->first('txtpreferencesper')}}</small>

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

</body>

@section('content')