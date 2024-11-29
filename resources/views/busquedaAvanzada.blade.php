@extends('layouts.plantilla1')

@section('title', 'Inicio')

@section('content')

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Ruta al archivo CSS en Laravel -->
    <link rel="stylesheet" href="{{ asset('css/componentes.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_BA.css') }}">

    <title>TURISTA SIN MAPS</title>
</head>

<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Búsqueda Avanzada de Hoteles</h2>

        <!-- Sección de Búsqueda Avanzada -->
        <form id="advanced-search" class="mb-4">
            <div class="row g-3">
                
            </div>
        </form>

        <!-- Filtros -->
    
        <form id="filters" class="mb-4">
            <div class="row g-3">

                <!-- Destino -->
                <div class="col-sm-1">
                    <label for="destination" class="form-label">Destino</label>
                    <input type="text" class="form-control" id="destination" placeholder="Ej. Cancún">
                </div>

                <!-- Número de Habitaciones y Huéspedes -->
                <div class="col-sm-2">
                    <label for="rooms" class="form-label">Num. Habitaciones</label>
                    <input type="number" class="form-control" id="rooms" min="1" placeholder="Ej. 2">
                </div>
                <div class="col-sm-2">
                    <label for="guests" class="form-label">Número de Huéspedes</label>
                    <input type="number" class="form-control" id="guests" min="1" placeholder="Ej. 4">
                </div>
                <!-- Categoría (Estrellas) -->
                <div class="col-sm-1">
                    <label for="stars" class="form-label">Estrellas</label>
                    <select id="stars" class="form-select">
                        <option value="">Todas</option>
                        <option value="5">5 </option>
                        <option value="4">4 </option>
                        <option value="3">3 </option>
                        <option value="2">2 </option>
                        <option value="1">1 </option>
                    </select>
                </div>

                <!-- Precio Máximo -->
                <div class="col-sm-2">
                    <label for="price" class="form-label">Precio Máximo (por noche)</label>
                    <input type="number" id="price" class="form-control" placeholder="Ej. 200">
                </div>

                <!-- Distancia al Centro -->
                <div class="col-sm-2">
                    <label for="distance" class="form-label">Distancia al Centro (km)</label>
                    <input type="number" id="distance" class="form-control" placeholder="Ej. 5">
                </div>

                <!-- Servicios -->
                <div class="col-sm-2">
                    <label for="services" class="form-label">Servicios</label>
                    <input type="text" id="services" class="form-control" placeholder="Ej. WiFi, Spa">
                </div>
            </div>
        </form>

<div class="table-container">
    <table class="table table-responsive mt-8">
        <thead>
            <tr>
                <th>Nombre del Hotel</th>
                <th>Ubicación</th>
                <th>Precio por Noche</th>
                <th>Estrellas</th>
                <th>Tipo de Alojamiento</th>
                <th>Comodidades</th>
                <th>Número de Habitaciones</th>
                <th>Número de Huéspedes</th>
                <th>Distancia al Centro (km)</th>
            </tr>
        </thead>
        <tbody id="hotel-table-body">
            <tr>
                <td>Hotel Paradise</td>
                <td>Cancún</td>
                <td>150</td>
                <td>5</td>
                <td>Resort</td>
                <td>Piscina, Spa, WiFi</td>
                <td>50</td> <!-- Número de Habitaciones -->
                <td>200</td> <!-- Número de Huéspedes -->
                <td>10</td> <!-- Distancia al Centro -->
            </tr>
            <tr>
                <td>Urban Stay</td>
                <td>Ciudad de México</td>
                <td>80</td>
                <td>3</td>
                <td>Hotel Urbano</td>
                <td>Desayuno, Gimnasio</td>
                <td>80</td> <!-- Número de Habitaciones -->
                <td>250</td> <!-- Número de Huéspedes -->
                <td>5</td> <!-- Distancia al Centro -->
            </tr>
            <tr>
                <td>Beachfront Escape</td>
                <td>Cancún</td>
                <td>220</td>
                <td>5</td>
                <td>Resort</td>
                <td>Piscina, Restaurante, Spa, WiFi</td>
                <td>120</td> <!-- Número de Habitaciones -->
                <td>400</td> <!-- Número de Huéspedes -->
                <td>15</td> <!-- Distancia al Centro -->
            </tr>
            <tr>
                <td>Mountain View Inn</td>
                <td>Guadalajara</td>
                <td>100</td>
                <td>4</td>
                <td>Hotel Rural</td>
                <td>Gimnasio, Restaurante, WiFi</td>
                <td>30</td> <!-- Número de Habitaciones -->
                <td>120</td> <!-- Número de Huéspedes -->
                <td>20</td> <!-- Distancia al Centro -->
            </tr>
            <tr>
                <td>Central Park Hotel</td>
                <td>Nueva York</td>
                <td>180</td>
                <td>4</td>
                <td>Hotel Urbano</td>
                <td>Desayuno, Gimnasio, WiFi</td>
                <td>150</td> <!-- Número de Habitaciones -->
                <td>500</td> <!-- Número de Huéspedes -->
                <td>1</td> <!-- Distancia al Centro -->
            </tr>
            <tr>
                <td>City Central Suites</td>
                <td>Ciudad de México</td>
                <td>120</td>
                <td>3</td>
                <td>Hotel Urbano</td>
                <td>Desayuno, WiFi, Gimnasio</td>
                <td>100</td> <!-- Número de Habitaciones -->
                <td>350</td> <!-- Número de Huéspedes -->
                <td>3</td> <!-- Distancia al Centro -->
            </tr>
            <tr>
                <td>Luxury Retreat</td>
                <td>Los Ángeles</td>
                <td>350</td>
                <td>5</td>
                <td>Resort</td>
                <td>Piscina, Spa, WiFi, Restaurante</td>
                <td>200</td> <!-- Número de Habitaciones -->
                <td>800</td> <!-- Número de Huéspedes -->
                <td>25</td> <!-- Distancia al Centro -->
            </tr>
            <tr>
                <td>Lakeview Lodge</td>
                <td>Tequisquiapan</td>
                <td>90</td>
                <td>3</td>
                <td>Hotel Rural</td>
                <td>Desayuno, WiFi</td>
                <td>50</td> <!-- Número de Habitaciones -->
                <td>150</td> <!-- Número de Huéspedes -->
                <td>30</td> <!-- Distancia al Centro -->
            </tr>
            <tr>
                <td>Skyline Hotel</td>
                <td>Ciudad de México</td>
                <td>160</td>
                <td>4</td>
                <td>Hotel Urbano</td>
                <td>Gimnasio, Restaurante, WiFi</td>
                <td>120</td> <!-- Número de Habitaciones -->
                <td>400</td> <!-- Número de Huéspedes -->
                <td>10</td> <!-- Distancia al Centro -->
            </tr>
            <tr>
                <td>Ocean Breeze Hotel</td>
                <td>Acapulco</td>
                <td>140</td>
                <td>4</td>
                <td>Hotel Playa</td>
                <td>Piscina, Restaurante, WiFi</td>
                <td>90</td> <!-- Número de Habitaciones -->
                <td>300</td> <!-- Número de Huéspedes -->
                <td>7</td> <!-- Distancia al Centro -->
            </tr>
        </tbody>
    </table>
</div>

            </table>
        </div>
    </div>

    <!-- Scripts -->
    <script>

        
        const filtersForm = document.getElementById('filters');
        const tableBody = document.getElementById('hotel-table-body');
    
        filtersForm.addEventListener('input', function() {
            const filterValues = {
                stars: document.getElementById('stars').value,
                price: document.getElementById('price').value,
                distance: document.getElementById('distance').value,
                services: document.getElementById('services').value.toLowerCase(),
                rooms: document.getElementById('rooms').value,
                guests: document.getElementById('guests').value
            };
    
            const rows = tableBody.getElementsByTagName('tr');
    
            for (let row of rows) {
                const stars = row.children[3].textContent;
                const price = row.children[2].textContent;
                const services = row.children[5].textContent.toLowerCase();
                const rooms = row.children[6].textContent;  // Número de Habitaciones
                const guests = row.children[7].textContent; // Número de Huéspedes
    
                const matchesFilters =
                    (!filterValues.stars || stars === filterValues.stars) &&
                    (!filterValues.price || parseFloat(price) <= parseFloat(filterValues.price)) &&
                    (!filterValues.distance || parseFloat(row.children[8].textContent) <= parseFloat(filterValues.distance)) &&
                    (!filterValues.services || services.includes(filterValues.services)) &&
                    (!filterValues.rooms || parseInt(rooms) >= parseInt(filterValues.rooms)) &&
                    (!filterValues.guests || parseInt(guests) >= parseInt(filterValues.guests));
    
                row.style.display = matchesFilters ? '' : 'none';
            }
        });
    </script>
    
</body>

@endsection
