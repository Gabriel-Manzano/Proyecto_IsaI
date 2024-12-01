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
                <img src="{{ asset('images/hoteles/hotel-1.jpg') }}" alt="Hotel 1" />
                <div class="hotel-description">
                    <h3>Hotel Santorini</h3>
                    <p>Santorini, Greece</p>
                    <div class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <a href="{{ route('hotel.show', ['id' => 1]) }}">Hotel Santorini</a>

                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/hoteles/hotel-2.jpg') }}" alt="Hotel 2" />
                <div class="hotel-description">
                    <h3>Hotel Vernazza</h3>
                    <p>Vernazza, Italy</p>
                    <div class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                    </div>
                    <a href="{{ route('hotel.show', ['id' => 2]) }}">Hotel Santorini</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/hoteles/hotel-3.jpg') }}" alt="Hotel 3" />
                <div class="hotel-description">
                    <h3>Hotel San Francisco</h3>
                    <p>San Francisco, USA</p>
                    <div class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                    </div>
                    <a href="{{ route('hotel.show', ['id' => 3]) }}">Hotel Santorini</a>
                </div>
            </div>
            <!-- Agrega más elementos aquí -->
        </div>

    </header>


    <section class="journey__container">
        <div class="section__container">
            <h2 class="section__title">Start Your Journey</h2>
            <p class="section__subtitle">The most searched countries in March</p>
            <div class="journey__grid">
                <div class="country__card">
                    <img src="{{ asset('images/country-1.jpg') }}" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>Santorini, Greece</span>
                    </div>
                </div>
                <div class="country__card">
                    <img src="{{ asset('images/country-2.jpg') }}" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>Vernazza, Italy</span>
                    </div>
                </div>
                <div class="country__card">
                    <img src="{{ asset('images/country-3.jpg') }}" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>San Francisco</span>
                    </div>
                </div>
                <div class="country__card">
                    <img src="{{ asset('images/country-4.jpg') }}" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>Navagio, Greece</span>
                    </div>
                </div>
                <div class="country__card">
                    <img src="{{ asset('images/country-5.jpg') }}" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>Ao Nang, Thailand</span>
                    </div>
                </div>
                <div class="country__card">
                    <img src="{{ asset('images/country-6.jpg') }}" alt="country" />
                    <div class="country__name">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>Phi Phi Island, Thailand</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner__container">
        <div class="section__container">
            <div class="banner__content">
                <h2>Discount 10-30% Off</h2>
                <p>
                    Travel the world on a budget with our unbeatable discounted travel
                    deals. Whether you're looking for a last-minute escape or planning
                    ahead, we've got you covered with incredible discounts on flights,
                    hotels, and packages. Don't wait, book now and experience the
                    adventure of a lifetime without breaking the bank.
                </p>
                <button>See Tours</button>
            </div>
        </div>
    </section>

    <section class="display__container">
        <div class="section__container">
            <h2 class="section__title">Why Choose Us</h2>
            <p class="section__subtitle">
                The gladdest moment in human life, is a departure into unknown lands.
            </p>
            <div class="display__grid">
                <div class="display__card grid-1">
                    <img src="{{ asset('images/grid-1.jpg') }}" alt="grid" />
                </div>
                <div class="display__card">
                    <i class="ri-earth-line"></i>
                    <h4>Passionate Travel</h4>
                    <p>Fuel your passion for adventure and discover new horizons</p>
                </div>
                <div class="display__card">
                    <img src="{{ asset('images/grid-2.jpg') }}" alt="grid" />
                </div>
                <div class="display__card">
                    <img src="{{ asset('images/grid-3.jpg') }}" alt="grid" />
                </div>
                <div class="display__card">
                    <i class="ri-road-map-line"></i>
                    <h4>Beautiful Places</h4>
                    <p>Uncover the world's most breathtakingly beautiful places</p>
                </div>
            </div>
        </div>
    </section>

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
    <x-hotel-card image="images/hoteles/hotel-1.jpg" name="Hotel Santorini" location="Santorini, Greece" rating="5"
        link="{{ route('hotel.show', ['id' => 1]) }}" />
    <x-hotel-card image="images/hoteles/hotel-2.jpg" name="Hotel Vernazza" location="San Francisco, USA" rating="4"
        link="{{ route('hotel.show', ['id' => 2]) }}" />
    <x-hotel-card image="images/hoteles/hotel-3.jpg" name="Hotel San Francisco" location="San Francisco, USA" rating="3"
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