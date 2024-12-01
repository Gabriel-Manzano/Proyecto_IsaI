@extends('layouts.plantilla1')

@section('title', 'Búsqueda Avanzada de vuelos')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_Inicio.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_BA.css') }}">
@endpush

@section('content')

<header>
    <center>
        <br>
        <h1>
            <ul class="nav__links">
                <a href="{{ route('busqueda') }}">Búsqueda Avanzada de hoteles</a>
                <a href="{{ route('busqueda_vuelos') }}">Búsqueda Avanzada de vuelos</a>
            </ul>
        </h1>
    </center>
</header>

<!-- Contenedor principal con filtros y tabla -->
<div class="container">
    <!-- Contenedor de filtros -->
    <div class="filter-container">
        <form method="GET" action="{{ route('busqueda_vuelos') }}">
            <input type="text" name="origin" placeholder="Origen" value="{{ request('origin') }}">
            <input type="text" name="destination" placeholder="Destino" value="{{ request('destination') }}">
            <input type="number" name="min_price" placeholder="Precio mínimo" value="{{ request('min_price') }}">
            <input type="number" name="max_price" placeholder="Precio máximo" value="{{ request('max_price') }}">
            <input type="datetime-local" name="departure_time" placeholder="Hora de salida"
                value="{{ request('departure_time') }}">
            <input type="datetime-local" name="arrival_time" placeholder="Hora de llegada"
                value="{{ request('arrival_time') }}">
            <select name="stops">
                <option value="">Escalas (Cualquiera)</option>
                <option value="0" {{ request('stops') == '0' ? 'selected' : '' }}>Sin escalas</option>
                <option value="1" {{ request('stops') == '1' ? 'selected' : '' }}>Con escalas</option>
            </select>

            <!-- Filtro por Aerolínea (campo de texto para nombre de aerolínea) -->
            <input type="text" name="aerolinea" placeholder="Aerolinea" value="{{ request('aerolinea') }}">

            <input type="number" name="pasajeros" placeholder="Pasajeros" value="{{ request('pasajeros') }}">

            <div class="button-group">
                <button type="submit">Aplicar Filtros</button>
                <a href="{{ route('busqueda_vuelos') }}" class="button-group">
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
                    <th>Número de vuelo</th>
                    <th>Aerolínea</th>
                    <th>Hora de Salida</th>
                    <th>Hora de Llegada</th>
                    <th>Duración</th>
                    <th>Precio</th>
                    <th>Escalas</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Número de Pasajeros</th>
                </tr>
            </thead>
            <tbody>
                @if($flights->isEmpty())
                    <tr>
                        <td colspan="9">No se encontraron vuelos que coincidan con la búsqueda.</td>
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

@endsection