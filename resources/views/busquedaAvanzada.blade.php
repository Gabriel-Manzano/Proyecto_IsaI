@extends('layouts.plantilla1')

@section('title', 'Búsqueda Avanzada de hoteles')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_Inicio.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_BA.css') }}">
@endpush

@section('content')

    <header>
        <nav>
            <center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>
                <ul class="nav__links">
                    <a href="{{ route('busqueda') }}">Búsqueda Avanzada de hoteles</a>
                    <a href="{{ route('busqueda_vuelos') }}">Búsqueda Avanzada de vuelos</a>
                </ul>
            </h1>
        </center>
        </nav>
    </header>

    <!-- Contenedor principal con filtros y tabla -->
    <div class="container">
        <!-- Contenedor de filtros -->
        <div class="filter-container">
            <form method="GET" action="{{ route('busqueda') }}">
                <input type="text" name="location" placeholder="Ubicación" value="{{ request('location') }}">
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
                    <!-- Redirigir a la ruta base sin filtros -->
                    <a href="{{ route('busqueda') }}" class="button-group">
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

