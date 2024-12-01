@extends('layouts.plantilla1')

@section('title', 'Búsqueda Avanzada de vuelos')

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
        <form method="GET" action="{{ route('busqueda_vuelos') }}">
            <div class="row g-3">
                <!-- Campo 1: Ocupa todo el ancho -->
                <div class="col-12">
                    <input type="text" name="origin" placeholder="Origen" value="{{ request('origin') }}" class="form-control">
                </div>
    
                <!-- Campo 2: Ocupa todo el ancho -->
                <div class="col-12">
                    <input type="text" name="destination" placeholder="Destino" value="{{ request('destination') }}" class="form-control">
                </div>
    
                <!-- Campo 3: Ocupa la mitad del ancho (al lado) -->
                <div class="col-md-6">
                    <input type="number" name="min_price" placeholder="Precio mínimo" value="{{ request('min_price') }}" class="form-control">
                </div>
    
                <!-- Campo 4: Ocupa la mitad del ancho (al lado) -->
                <div class="col-md-6">
                    <input type="number" name="max_price" placeholder="Precio máximo" value="{{ request('max_price') }}" class="form-control">
                </div>
    
                <!-- Campo 5: Ocupa la mitad del ancho (al lado) -->
                <div class="col-md-6">
                    <input type="date" name="departure_date" value="{{ request('departure_date') }}" class="form-control">
                </div>
    
                <!-- Campo 6: Ocupa la mitad del ancho (al lado) -->
                <div class="col-md-6">
                    <input type="date" name="return_date" value="{{ request('return_date') }}" class="form-control">
                </div>
    
                <!-- Botones: Ocupan todo el ancho -->
                <div class="col-12 d-flex justify-content-between mt-3">
                    <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
                    <a href="{{ route('busqueda_vuelos') }}" class="btn btn-secondary">Borrar filtros</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Contenedor de la tabla de resultados -->
    <div class="table-container mt-4">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-sm">
                <thead class="table-light">
                    <tr>
                        <th>Aerolínea</th>
                        <th>Origen</th>
                        <th>Destino</th>
                        <th>Precio</th>
                        <th>Fecha de Salida</th>
                        <th>Fecha de Regreso</th>
                        <th>Duración</th>
                        <th>Escalas</th>
                    </tr>
                </thead>
                <tbody>
                    @if($flights->isEmpty())
                        <tr>
                            <td colspan="8" class="text-center">No se encontraron vuelos que coincidan con la búsqueda.</td>
                        </tr>
                    @else
                        @foreach($flights as $flight)
                            <tr>
                               <td>{{ $flight->id }}</td>
                            <td>{{ $flight->aerolinea }}</td>
                            <td>{{ $flight->departure_time }}</td>
                            <td>{{ $flight->arrival_time }}</td>
                            <td>{{ $flight->duracion_vuelo }} horas</td>
                            <td>${{ number_format($flight->precio, 2) }}</td>
                            <td>{{ $flight->escalas }}</td>
                            <td>{{ $flight->origen }}</td>
                            <td>{{ $flight->destino }}</td>
                            <td>{{ $flight->pasajeros }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
