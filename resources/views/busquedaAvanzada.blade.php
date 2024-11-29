@extends('layouts.plantilla1')

@section('title', 'Búsqueda Avanzada')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_Inicio.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_BA.css') }}">
    <style>
        /* Contenedor que mantiene los filtros y la tabla en columnas */
        .container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* Contenedor de los filtros */
        .filter-container {
            width: 300px;
            flex-shrink: 0;
        }

        .filter-container input,
        .filter-container select {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .filter-container button {
            padding: 8px 20px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        .filter-container .button-group {
            display: flex;
            gap: 10px;
            justify-content: flex-start;
        }

        .table-container {
            flex-grow: 1;
            margin-top: 20px;
        }

        /* Hacer que el contenedor sea responsivo */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .filter-container {
                width: 100%;
            }
        }
    </style>
@endpush

@section('content')
    <header>
        <h2>Búsqueda Avanzada de Hoteles</h2>
    </header>

    <!-- Contenedor principal con filtros y tabla -->
    <div class="container">
        <!-- Contenedor de filtros -->
        <div class="filter-container">
            <form method="GET" action="{{ route('busqueda') }}">
                <input type="text" name="location" placeholder="Ubicación" value="{{ request('location') }}">
                
                <!-- Filtro de fechas -->
                <input type="date" name="check_in" value="{{ request('check_in') }}" placeholder="Fecha de entrada">
                <input type="date" name="check_out" value="{{ request('check_out') }}" placeholder="Fecha de salida">

                <!-- Filtro de número de habitaciones y huéspedes -->
                <input type="number" name="rooms" value="{{ request('rooms') }}" placeholder="Número de habitaciones" min="1">
                <input type="number" name="guests" value="{{ request('guests') }}" placeholder="Número de huéspedes" min="1">

                <!-- Filtros de precio y estrellas -->
                <input type="number" name="min_price" placeholder="Precio mínimo" value="{{ request('min_price') }}">
                <input type="number" name="max_price" placeholder="Precio máximo" value="{{ request('max_price') }}">
                <input type="number" name="stars" placeholder="Estrellas" value="{{ request('stars') }}">

                <select name="type">
                    <option value="">Tipo</option>
                    <option value="Hotel" {{ request('type') == 'Hotel' ? 'selected' : '' }}>Hotel</option>
                    <option value="Resort" {{ request('type') == 'Resort' ? 'selected' : '' }}>Resort</option>
                    <option value="Hostel" {{ request('type') == 'Hostel' ? 'selected' : '' }}>Hostel</option>
                </select>

                <select name="amenities[]" multiple>
                    <option value="Piscina" {{ in_array('Piscina', (array)request('amenities', [])) ? 'selected' : '' }}>Piscina</option>
                    <option value="WiFi" {{ in_array('WiFi', (array)request('amenities', [])) ? 'selected' : '' }}>WiFi</option>
                    <option value="Spa" {{ in_array('Spa', (array)request('amenities', [])) ? 'selected' : '' }}>Spa</option>
                    <option value="Gimnasio" {{ in_array('Gimnasio', (array)request('amenities', [])) ? 'selected' : '' }}>Gimnasio</option>
                </select>

                <div class="button-group">
                    <button type="submit">Aplicar Filtros</button>
                    <a href="{{ route('busqueda') }}">
                        <button type="button">Borrar filtros</button>
                    </a>
                </div>
            </form>
        </div>

        <!-- Contenedor de la tabla de resultados -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Ubicación</th>
                        <th>Precio</th>
                        <th>Estrellas</th>
                        <th>Tipo</th>
                        <th>Amenidades</th>
                    </tr>
                </thead>
                <tbody>
                    @if($hotels->isEmpty())
                        <tr>
                            <td colspan="6">No se encontraron hoteles que coincidan con la búsqueda.</td>
                        </tr>
                    @else
                        @foreach($hotels as $hotel)
                            <tr>
                                <td>{{ $hotel->name }}</td>
                                <td>{{ $hotel->location }}</td>
                                <td>${{ number_format($hotel->price, 2) }}</td>
                                <td>{{ $hotel->stars }}</td>
                                <td>{{ $hotel->type }}</td>
                                <td>{{ implode(', ', $hotel->amenities) }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
