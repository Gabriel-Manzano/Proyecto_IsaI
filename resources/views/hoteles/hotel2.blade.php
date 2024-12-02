@extends('layouts.plantilla1')

@section('title', 'Inicio')


@section('content')

<head>

    <link rel="stylesheet" href="{{ asset('css/componentes.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stylesHotel.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>



    {{--
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhvQHUFNotF0PR_tL8oBIDX7syw3CbmRY&callback=initMap">
        </script> --}}

</head>

<body>
    <div class="informacion">
        <main class="hotel-container">
            <section class="gallery">
                <div class="main-image">
                    <img src="{{ asset('images/hoteles/hotel-2.jpeg') }}" alt="Hotel 2" />
                </div>
                <div class="thumbnail-images">
                    <img src="{{ asset('images/hoteles/hotel-2-2.jpeg') }}" alt="Imagen del hotel">
                    <img src="{{ asset('images/hoteles/hotel-2-3.jpeg') }}" alt="Imagen del hotel">
                    <img src="{{ asset('images/hoteles/hotel-2-4.jpeg') }}" alt="Habitación del hotel">
                    <img src="{{ asset('images/hoteles/hotel-2-5.jpeg') }}" alt="Terraza del hotel">
                </div>
            </section>



            <section class="info">
                <h1>Nihi Sumba</h1>
                <p class="rating">⭐⭐⭐⭐ <span>7 Regular</span></p>
                <p>A los huéspedes les gustó: <strong>Vistas hermosas</strong></p>

                <h2>Información de la propiedad</h2>
                <p>Nihi Sumba es un exclusivo resort ubicado en la isla indonesia de Sumba, que ofrece una experiencia
                    aislada y lujosa.</p>
                <p>Precio por noche: $500</p>
                <strong>Disponibilidad de habitaciones: Disponible</strong>
                <p>Políticas de cancelación: No reembolso</p>
                <ul class="amenities">
                    <li>🐾 Acepta mascotas</li>
                    <li>🕒 Recepción 24h</li>
                    <li>🧺 Lavandería</li>
                </ul>
                <aside class="reservation">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservarModal">
                        Reservar
                    </button>
                </aside>
            </section>

            <section class="location">
                <h2>Explora la zona</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.1642812599056!2d119.30746541528317!3d-9.708338693070506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcb9a7451f1be81%3A0x53f8722037c3b8a!2sNihi%20Sumba!5e0!3m2!1ses-419!2smx!4v1731991942525!5m2!1ses-419!2smx"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

                {{-- <div id="map" style="height: 400px; width: 100%;"></div> --}}
                <address>
                    <p>Hoba Wawi, Wanokaka, West Sumba Regency, East Nusa Tenggara, Indonesia.</p>
                    <a href="#">Ver en el mapa</a>
                </address>
                <ul class="nearby">
                    <li>Aeropuerto Internacional - 50 min en auto</li>
                    <li>Kantor Desa Patiala Dete - 10 min en auto</li>
                    <li>Iglesia Kampuung Karre - 25 min en auto</li>
                </ul>
            </section>
        </main>
        @include('modal.modalReserva')
        <script>
            function initMap() {
                const nihiSumba = { lat: -9.708338, lng: 119.307465 }; // Coordenadas del hotel Nihi Sumba
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15, // Ajuste del nivel de zoom para una vista más cercana
                    center: nihiSumba,
                });
                new google.maps.Marker({
                    position: nihiSumba,
                    map: map,
                    title: "Nihi Sumba", // Título del marcador
                });
            }
        </script>






        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body d-flex align-items-center">
                            <!-- Imagen -->
                            <div class="me-3">
                                <img src="{{ asset('assets/logo.jpg') }}" style="width: 75px; border-radius: 50%;"
                                    alt="logo">
                            </div>
                            <!-- Nombre y comentario -->
                            <div>
                                <h5 class="card-title mb-1">Gabriel Manzano</h5>
                                <p class="card-text mb-2">With supporting text below as a natural lead-in to
                                    additional
                                    content.</p>
                                <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>