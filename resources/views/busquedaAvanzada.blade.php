@extends('layouts.plantilla1')
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
@section('title', 'Búsqueda Avanzada de hoteles')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/componentes.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_BA.css') }}">
@endpush

@section('content')

<header class="container">
    <div class="text-center py-4 bg-white rounded-lg shadow-sm mx-auto">
        <h1>
            <div class="btn-group" role="group" aria-label="Hotel and Flight Search">
                <a href="{{ route('busqueda') }}" class="btn btn-outline-primary {{ request()->routeIs('busqueda') ? 'active' : '' }}">
                    Búsqueda Avanzada de hoteles
                </a>
                <a href="{{ route('busqueda_vuelos') }}" class="btn btn-outline-primary {{ request()->routeIs('busqueda_vuelos') ? 'active' : '' }}">
                    Búsqueda Avanzada de vuelos
                </a>
            </div>
        </h1>
    </div>
    
</header>



<!-- Contenedor principal con filtros y tabla -->
<div class="container mt-4">
    <!-- Contenedor de filtros -->
    <div class="filter-container mb-4">
        <form method="GET" action="{{ route('busqueda') }}">
            <div class="row g-3">
                <!-- Campo 1: Ocupa todo el ancho -->
                <div class="col-12">
                    <input type="text" name="location" placeholder="Ubicación" value="{{ request('location') }}" class="form-control">
                </div>
    
                <!-- Campos 2 y 3: Ocupan la mitad del ancho (al lado) -->
                <div class="col-md-6">
                    <input type="number" name="min_price" placeholder="Precio mínimo" value="{{ request('min_price') }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <input type="number" name="max_price" placeholder="Precio máximo" value="{{ request('max_price') }}" class="form-control">
                </div>
    
                <!-- Campo 4: Ocupa todo el ancho -->
                <div class="col-12">
                    <input type="number" name="stars" placeholder="Estrellas" value="{{ request('stars') }}" class="form-control">
                </div>
    
                <!-- Campos 5 y 6: Ocupan la mitad del ancho (al lado) -->
                <div class="col-md-6">
                    <select name="type" class="form-select">
                        <option value="">Tipo</option>
                        <option value="Hotel" {{ request('type') == 'Hotel' ? 'selected' : '' }}>Hotel</option>
                        <option value="Resort" {{ request('type') == 'Resort' ? 'selected' : '' }}>Resort</option>
                        <option value="Hostel" {{ request('type') == 'Hostel' ? 'selected' : '' }}>Hostel</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select name="amenities[]" multiple class="form-select">
                        <option value="Piscina" {{ in_array('Piscina', (array) request('amenities', [])) ? 'selected' : '' }}>Piscina</option>
                        <option value="WiFi" {{ in_array('WiFi', (array) request('amenities', [])) ? 'selected' : '' }}>WiFi</option>
                        <option value="Spa" {{ in_array('Spa', (array) request('amenities', [])) ? 'selected' : '' }}>Spa</option>
                        <option value="Gimnasio" {{ in_array('Gimnasio', (array) request('amenities', [])) ? 'selected' : '' }}>Gimnasio</option>
                    </select>
                </div>
    
                <!-- Campos 7 y 8: Ocupan la mitad del ancho (al lado) -->
                <div class="col-md-6">
                    <input type="number" name="habitaciones" placeholder="Habitaciones" value="{{ request('habitaciones') }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <input type="number" name="huespedes" placeholder="Huéspedes" value="{{ request('huespedes') }}" class="form-control">
                </div>
    
                <!-- Campo 9: Ocupa todo el ancho -->
                <div class="col-12">
                    <input type="number" name="distancia" placeholder="Distancia al centro (m)" value="{{ request('distancia') }}" class="form-control">
                </div>
    
                <!-- Botones: Ocupan todo el ancho -->
                <div class="col-12 d-flex justify-content-between mt-3">
                    <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
                    <a href="{{ route('busqueda') }}" class="btn btn-secondary">Borrar filtros</a>
                </div>
            </div>
        </form>
    </div>
    

<!-- Contenedor de la tabla de resultados -->
<div class="table-container mt-4">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover table-sm">
            <thead class="table-primary">
                <tr>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Precio</th>
                    <th>Estrellas</th>
                    <th>Tipo</th>
                    <th>Amenidades</th>
                    <th>Número de habitaciones</th>
                    <th>Número de huéspedes</th>
                    <th>Distancia al centro (m)</th>
                </tr>
            </thead>
            <tbody>
                @if($hotels->isEmpty())
                    <tr>
                        <td colspan="9" class="text-center">No se encontraron hoteles que coincidan con la búsqueda.</td>
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
                            <td>{{ $hotel->habitaciones }}</td>
                            <td>{{ $hotel->huespedes }}</td>
                            <td>{{ $hotel->distancia }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>



@endsection
