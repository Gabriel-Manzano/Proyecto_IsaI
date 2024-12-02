@extends('layouts.plantilla1')

@section('title', 'Administración')

@section('content')

<head>
    <title>Gestión de Administradores</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/adminPanel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/componentes.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container mt-5 p-4 shadow rounded">
        @session('exito')
            <script>
                Swal.fire({
                    title: "Se han actualizado los datos!",
                    icon: "success"
                });
            </script>
        @endsession
        <!-- Gestión de Hoteles -->
        <div class="gestionHoteles p-4 mb-4 shadow-sm rounded">
            <h1 class="text-center mb-4">Panel de Administración</h1>
            <h3 class="mb-3">Gestión de Hoteles</h3>

            <form action="{{route('rutaactualizarVueloAdm', ['id' => $Vuelo->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <!-- Número del vuelo -->
                    <div class="col-md-4">
                        <input type="text" name="numero_vuelo" class="form-control" placeholder="Número del vuelo"
                            value="{{ old('numero_vuelo') }}">
                        <small class="fst-italic text-danger">{{ $errors->first('numero_vuelo') }}</small>
                    </div>

                    <!-- Aerolínea -->
                    <div class="col-md-4">
                        <input type="text" name="aerolinea" class="form-control" placeholder="Aerolínea"
                            value="{{ old('aerolinea') }}">
                        <small class="fst-italic text-danger">{{ $errors->first('aerolinea') }}</small>
                    </div>

                    <!-- Precio -->
                    <div class="col-md-4">
                        <input type="number" step="0.01" name="precio" class="form-control" placeholder="Precio"
                            value="{{ old('precio') }}">
                        <small class="fst-italic text-danger">{{ $errors->first('precio') }}</small>
                    </div>

                    <!-- Tiene escalas -->
                    <div class="col-md-4">
                        <label class="form-label">Tiene escalas</label>
                        <select name="has_stopovers" class="form-select">
                            <option value="1" {{ old('has_stopovers') == 1 ? 'selected' : '' }}>Sí</option>
                            <option value="0" {{ old('has_stopovers') == 0 ? 'selected' : '' }}>No</option>
                        </select>
                        <small class="fst-italic text-danger">{{ $errors->first('has_stopovers') }}</small>
                    </div>

                    <!-- Hora de salida -->
                    <div class="col-md-4">
                        <label class="form-label">Fecha y hora de salida</label>
                        <input type="datetime-local" name="departure_time" class="form-control"
                            value="{{ old('departure_time') }}">
                        <small class="fst-italic text-danger">{{ $errors->first('departure_time') }}</small>
                    </div>

                    <!-- Hora de llegada -->
                    <div class="col-md-4">
                        <label class="form-label">Fecha y hora de regreso</label>
                        <input type="datetime-local" name="arrival_time" class="form-control"
                            value="{{ old('arrival_time') }}">
                        <small class="fst-italic text-danger">{{ $errors->first('arrival_time') }}</small>
                    </div>

                    <!-- Duración del vuelo -->
                    <div class="col-md-4">
                        <label class="form-label">Duración del vuelo (hrs)</label>
                        <input type="number" name="duracion_vuelo" class="form-control"
                            placeholder="Duración del vuelo (min)" value="{{ old('duracion_vuelo') }}">
                        <small class="fst-italic text-danger">{{ $errors->first('duracion_vuelo') }}</small>
                    </div>

                    <!-- Número de escalas -->
                    <div class="col-md-4">
                        <label class="form-label">Número de escalas</label>
                        <input type="number" name="escalas" class="form-control" placeholder="Número de escalas"
                            value="{{ old('escalas', 0) }}">
                        <small class="fst-italic text-danger">{{ $errors->first('escalas') }}</small>
                    </div>

                    <!-- Origen -->
                    <div class="col-md-4">
                        <label class="form-label">Ciudad de Origen</label>
                        <input type="text" name="origen" class="form-control" placeholder="Ciudad de origen"
                            value="{{ old('origen') }}">
                        <small class="fst-italic text-danger">{{ $errors->first('origen') }}</small>
                    </div>

                    <!-- Destino -->
                    <div class="col-md-4">
                        <label class="form-label">Ciudad de destino</label>
                        <input type="text" name="destino" class="form-control" placeholder="Ciudad de destino"
                            value="{{ old('destino') }}">
                        <small class="fst-italic text-danger">{{ $errors->first('destino') }}</small>
                    </div>

                    <!-- Pasajeros -->
                    <div class="col-md-4">
                        <label class="form-label">Número de pasajeros</label>
                        <input type="number" name="pasajeros" class="form-control" placeholder="Número de pasajeros"
                            value="{{ old('pasajeros', 0) }}">
                        <small class="fst-italic text-danger">{{ $errors->first('pasajeros') }}</small>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Guardar Vuelo</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection