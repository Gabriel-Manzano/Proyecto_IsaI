@extends('layouts.plantilla1')

@section('title', 'Inicio')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles_Inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_hotel.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/remixicon/fonts/remixicon.css">
    <title>{{ $hotel['name'] }} - TURISTA SIN MAPS</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @session('exito')
        <script>
            Swal.fire({
                title: "¡Reservación guardada con éxito!",
                icon: "success"
            });
        </script>
    @endsession
    <header>
        <br>
        <br>
        <h1>{{ $hotel['name'] }}</h1>
        <div class="stars">
            @for ($i = 1; $i <= 5; $i++)
                <i
                    class="ri-star{{ $i <= floor($hotel['stars']) ? '-fill' : ($i - $hotel['stars'] == 0.5 ? '-half-fill' : '-line') }}"></i>
            @endfor
        </div>
        <p>{{ $hotel['description'] }}</p>

        <!-- Div que contiene la galería de imágenes -->
        <div class="hotel-gallery">
            <h2>Galería de Imágenes</h2>
            <div class="carousel-3d">
                @foreach ($hotel['images'] as $image)
                    <div class="carousel-item">
                        <img src="{{ asset('images/hoteles/' . $image) }}" alt="Imagen de {{ $hotel['name'] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </header>

    <section class="hotel-amenities">
        <h2>Servicios y Comodidades</h2>
        <div class="amenities-list">
            <ul>
                @foreach ($hotel['amenities'] as $amenity)
                    <li>{{ $amenity }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="hotel-activities">
        <h2>Actividades</h2>
        <div class="activities-list">
            <ul>
                @foreach ($hotel['activities'] as $activity)
                    <li>{{ $activity }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="hotel-comments">
        <h2>Comentarios de los Usuarios</h2>
        <div class="comments">
            @if (isset($hotel['comments']) && count($hotel['comments']) > 0)
                @foreach ($hotel['comments'] as $comment)
                    <div class="comment">
                        <strong>{{ $comment['user'] }}</strong>
                        <div class="stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="ri-star{{ $i <= $comment['rating'] ? '-fill' : '-line' }}"></i>
                            @endfor
                        </div>
                        <p>{{ $comment['comment'] }}</p>
                    </div>
                @endforeach
            @else
                <p>No hay comentarios disponibles.</p>
            @endif
        </div>
    </section>

    <section class="hotel-reservation">
        <h2>Reserva tu Estancia</h2>

        <form action="/enviarHotel1" method="POST">

            @csrf

            <label for="check-in">Fecha de Check-in:</label>
            <input type="date" id="check-in" name="datcheckin" value="{{ old('datcheckin') }}">
            <small class="fst-italic text-danger">{{$errors->first('datcheckin')}}</small>

            <label for="check-out">Fecha de Check-out:</label>
            <input type="date" id="check-out" name="datcheckout" value="{{ old('datcheckout') }}">
            <small class="fst-italic text-danger">{{$errors->first('datcheckout')}}</small>

            <label for="guests">Número de Huéspedes:</label>
            <input type="text" id="guests" name="txthuespedes" value="{{ old('txthuespedes') }}">
            <small class="fst-italic text-danger">{{$errors->first('txthuespedes')}}</small>

            <button type="submit" class="reserve-button">Confirmar Reserva</button>

        </form>

    </section>

    <script src="{{ asset('js/carousel.js') }}"></script>
</body>

@section('content')