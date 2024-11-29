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



        {{-- <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhvQHUFNotF0PR_tL8oBIDX7syw3CbmRY&callback=initMap">
</script> --}}

    </head>

    <body>
        <div class="informacion">
            <main class="hotel-container">
                <section class="gallery">
                    <div class="main-image">
                        <img src="{{ asset('images/hoteles/hotel-2.jpg') }}" alt="Hotel 2" />
                    </div>
                    <div class="thumbnail-images">
                        <img src="{{ asset('images/hoteles/hotel-2.jpg') }}" alt="Imagen del hotel">
                        <img src="{{ asset('images/hoteles/hotel-2.jpg') }}" alt="Imagen del hotel">
                        <img src="{{ asset('images/hoteles/hotel-2.jpg') }}" alt="Habitación del hotel">
                        <img src="{{ asset('images/hoteles/hotel-2.jpg') }}" alt="Terraza del hotel">
                    </div>
                </section>



                <section class="info">
                    <h1>Casa Oxa Hotel</h1>
                    <p class="rating">⭐⭐⭐⭐ <span>10 Excepcional</span></p>
                    <p>A los huéspedes les gustó: <strong>Personal amable</strong></p>
                    <a href="#">Ver las 112 opiniones</a>

                    <h2>Información de la propiedad</h2>
                    <p>Hotel con servicios de spa cerca de Acueducto de Santiago de Querétaro</p>
                    <ul class="amenities">
                        <li>🏊 Alberca</li>
                        <li>🐾 Acepta mascotas</li>
                        <li>🕒 Recepción 24h</li>
                        <li>💆 Spa</li>
                        <li>🧺 Lavandería</li>
                        <li>❄️ Aire acondicionado</li>
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
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119499.09121106884!2d-100.50556946730849!3d20.614724541835916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b8fdc5b9255%3A0x97b094aa561b832f!2sSantiago%20de%20Quer%C3%A9taro%2C%20Qro.!5e0!3m2!1ses-419!2smx!4v1731991942525!5m2!1ses-419!2smx"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{-- <div id="map" style="height: 400px; width: 100%;"></div> --}}
                    <address>
                        <p>45 José María Arteaga Centro, Querétaro, QUE, 76000</p>
                        <a href="#">Ver en el mapa</a>
                    </address>
                    <ul class="nearby">
                        <li>Museo de Arte de Querétaro - 3 min a pie</li>
                        <li>Templo de Santa Rosa de Viterbo - 4 min a pie</li>
                        <li>Catedral de Querétaro - 6 min a pie</li>
                        <li>Aeropuerto Internacional de Querétaro - 38 min en auto</li>
                    </ul>
                </section>
            </main>
            @include('modal.modalReserva')
            <script>
                /*  function initMap() {
                                                                  // Ubicación específica (Ejemplo: Ciudad de Querétaro, México)
                                                                  const queretaro = { lat: 20.5937, lng: -100.3928 };
                                                                
                                                                  // Crea el mapa y lo centra en la ubicación
                                                                  const map = new google.maps.Map(document.getElementById("map"), {
                                                                    zoom: 12,
                                                                    center: queretaro,
                                                                  });
                                                                
                                                                  // Agrega un marcador en la ubicación
                                                                  new google.maps.Marker({
                                                                    position: queretaro,
                                                                    map: map,
                                                                    title: "Querétaro",
                                                                  });
                                                                } */
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
                                    <p class="card-text mb-2">With supporting text below as a natural lead-in to additional
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
