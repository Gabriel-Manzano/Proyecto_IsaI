@extends('layouts.plantilla1')

@section('title', 'Inicio')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_Inicio.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_carousel.css') }}" />
@endpush

@section('content')

<body>

    @session('exito')
        <script>
            Swal.fire({
                title: "¡Inicio de sesión exitoso!",
                icon: "success"
            });
        </script>
    @endsession
    <header>
        <div class="carousel-3d">
            <div class="carousel-item">
                <img src="{{ asset('images/hoteles/hotel-1.jpeg') }}" alt="Hotel 1" />
                <div class="hotel-description">
                    <h3>Cheval Blanc París</h3>
                    <p>París, Francia.</p>
                    <div class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <a href="{{ route('hotel.show', ['id' => 1]) }}">Cheval Blanc París</a>

                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/hoteles/hotel-2.jpeg') }}" alt="Hotel 2" />
                <div class="hotel-description">
                    <h3>Nihi Sumba</h3>
                    <p>East Nusa Tenggara, Indonesia.</p>
                    <div class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                    </div>
                    <a href="{{ route('hotel.show', ['id' => 2]) }}">Nihi Sumba</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/hoteles/hotel-3.jpeg') }}" alt="Hotel 3" />
                <div class="hotel-description">
                    <h3>Raffles Hotel</h3>
                    <p> Singapore, Singapore</p>
                    <div class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                    </div>
                    <a href="{{ route('hotel.show', ['id' => 3]) }}">Raffles Hotel</a>
                </div>
            </div>
            <!-- Agrega más elementos aquí -->
        </div>

    </header>

    <script>
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-item');
        const itemCount = items.length;
        const rotationDegree = 360 / itemCount;

        function rotateCarousel() {
            const angle = rotationDegree * currentIndex;
            items.forEach((item, index) => {
                item.style.transform = `rotateY(${angle - rotationDegree * index}deg) translateZ(300px)`; // Reduce el valor de translateZ

            });
            currentIndex = (currentIndex + 1) % itemCount;
        }

        setInterval(rotateCarousel, 2000); // Cambiar cada 3 segundos
    </script>
    <x-hotel-card image="images/hoteles/hotel-1.jpeg" name="Cheval Blanc París" location="París, Francia." rating="5"
        link="{{ route('hotel.show', ['id' => 1]) }}" />
    <x-hotel-card image="images/hoteles/hotel-2.jpeg" name="Nihi Sumba" location="East Nusa Tenggara, Indonesia." rating="4"
        link="{{ route('hotel.show', ['id' => 2]) }}" />
    <x-hotel-card image="images/hoteles/hotel-3.jpeg" name="Raffles Hotel" location=" Singapore, Singapore" rating="3"
        link="{{ route('hotel.show', ['id' => 3]) }}" />

</body>

</html>

<!-- Secciones adicionales como "Start Your Journey", "Why Choose Us", etc. -->
@endsection

@push('scripts')
    <script>
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-item');
        const itemCount = items.length;
        const rotationDegree = 360 / itemCount;

        function rotateCarousel() {
            const angle = rotationDegree * currentIndex;
            items.forEach((item, index) => {
                item.style.transform = `rotateY(${angle - rotationDegree * index}deg) translateZ(300px)`;
            });
            currentIndex = (currentIndex + 1) % itemCount;
        }
        setInterval(rotateCarousel, 2000);
    </script>
@endpush