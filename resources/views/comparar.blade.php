@extends('layouts.plantilla1')

@section('title', 'Comparativa de Hoteles')

@push('styles')
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/componentes.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stylesComparar.css') }}" />
@endpush

@section('content')

<body>
    <!-- Vista de Comparativa de Hoteles -->
    <div class="container ">
       <br>
       <br>
       
        <h2 class="text-center mb-4  fw-bold">Comparativa de Hoteles</h2>
        
        <div class="row justify-content-center">
            <!-- Selección de Hoteles -->
            <div class="col-md-10">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="hotel1" class="form-label fw-semibold">Selecciona el primer hotel:</label>
                        <select id="hotel1" class="form-select">
                            <option value="hotel1">Hotel Paradise</option>
                            <option value="hotel2">Montaña Retreat</option>
                            <option value="hotel3">Urban Stay</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="hotel2" class="form-label fw-semibold">Selecciona el segundo hotel:</label>
                        <select id="hotel2" class="form-select">
                            <option value="hotel1">Hotel Paradise</option>
                            <option value="hotel2">Montaña Retreat</option>
                            <option value="hotel3">Urban Stay</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="hotel3" class="form-label fw-semibold">Selecciona el tercer hotel:</label>
                        <select id="hotel3" class="form-select">
                            <option value="hotel1">Hotel Paradise</option>
                            <option value="hotel2">Montaña Retreat</option>
                            <option value="hotel3">Urban Stay</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla Comparativa -->
        <div class="table-responsive mt-5">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-primary text-center">
                    <tr>
                        <th class="fw-bold">Atributos</th>
                        <th class="fw-bold">Hotel 1</th>
                        <th class="fw-bold">Hotel 2</th>
                        <th class="fw-bold">Hotel 3</th>
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
    </div>
</body>
@endsection
