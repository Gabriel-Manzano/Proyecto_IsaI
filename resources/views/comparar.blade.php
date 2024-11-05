@extends('layouts.plantilla1')

@section('title', 'Comparativa de Hoteles')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles_Inicio.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_comparativa.css') }}">
@endpush

@section('content')
<br>
<br>
<body>
    <!-- Vista de Comparativa de Hoteles -->
    <div class="comparison-container">
        <h2>Comparativa de Hoteles</h2>
        <div class="hotel-selection">
            <label for="hotel1">Selecciona el primer hotel:</label>
            <select id="hotel1">
                <option value="hotel1">Hotel Paradise</option>
                <option value="hotel2">Montaña Retreat</option>
                <option value="hotel3">Urban Stay</option>
            </select>

            <label for="hotel2">Selecciona el segundo hotel:</label>
            <select id="hotel2">
                <option value="hotel1">Hotel Paradise</option>
                <option value="hotel2">Montaña Retreat</option>
                <option value="hotel3">Urban Stay</option>
            </select>

            <label for="hotel3">Selecciona el tercer hotel:</label>
            <select id="hotel3">
                <option value="hotel1">Hotel Paradise</option>
                <option value="hotel2">Montaña Retreat</option>
                <option value="hotel3">Urban Stay</option>
            </select>
        </div>

        <table class="comparison-table">
            <thead>
                <tr>
                    <th>Atributos</th>
                    <th>Hotel 1</th>
                    <th>Hotel 2</th>
                    <th>Hotel 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ubicación</td>
                    <td>Cancún</td>
                    <td>Colorado</td>
                    <td>Ciudad de México</td>
                </tr>
                <tr>
                    <td>Precio por noche</td>
                    <td>$150</td>
                    <td>$200</td>
                    <td>$180</td>
                </tr>
                <tr>
                    <td>Estrellas</td>
                    <td>4</td>
                    <td>5</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Comodidades</td>
                    <td>Piscina, Spa</td>
                    <td>Gimnasio, Restaurante</td>
                    <td>Wifi, Desayuno incluido</td>
                </tr>
                <!-- Más atributos según sea necesario -->
            </tbody>
        </table>
    </div>
</body>

@endsection