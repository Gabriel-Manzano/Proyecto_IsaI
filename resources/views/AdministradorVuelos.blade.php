@extends('layouts.plantilla1')

@section('title', 'Administración')

@section('content')

<head>
    <title>Actualización Hoteles</title>
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
            <h3 class="mb-3">Gestión de Vuelos</h3>

            <form action="/AdministradorVuelos" method="POST">
                @csrf
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


            <!-- Tabla de Hoteles -->
            <table class="table table-striped table-hover mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Número de vuelo</th>
                        <th>Aerolínea</th>
                        <th>Precio</th>
                        <th>Tiene escalas</th>
                        <th>Fecha y hora de salida</th>
                        <th>Fecha y hora de regreso</th>
                        <th>Duración del vuelo</th>
                        <th>Número de escalas</th>
                        <th>Origen</th>
                        <th>Destino</th>
                        <th>Pasajeros</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @if($consultaVuelos->isEmpty())
                        <tr>
                            <td colspan="13">No hay vuelos registrados.</td>
                        </tr>
                    @else
                        @foreach($consultaVuelos as $consultaVuelo)
                            <tr>
                                <td>{{ $consultaVuelo->id }}</td>
                                <td>{{ $consultaVuelo->numero_vuelo }}</td>
                                <td>{{ $consultaVuelo->aerolinea }}</td>
                                <td>{{ $consultaVuelo->precio }}</td>
                                <td>{{ $consultaVuelo->has_stopovers ? 'Sí' : 'No' }}</td>
                                <td>{{ $consultaVuelo->departure_time }}</td>
                                <td>{{ $consultaVuelo->arrival_time }}</td>
                                <td>{{ $consultaVuelo->duracion_vuelo }} min</td>
                                <td>{{ $consultaVuelo->escalas }}</td>
                                <td>{{ $consultaVuelo->origen }}</td>
                                <td>{{ $consultaVuelo->destino }}</td>
                                <td>{{ $consultaVuelo->pasajeros }}</td>
                                <td>
                                    <a href="{{ route('rutaenviarVueloAdm', ['id' => $consultaVuelo->id]) }}"
                                        class="btn btn-warning btn-sm">
                                        {{ __('Editar') }}
                                    </a>
                                </td>
                                <td>
                                    <form id="deleteForm{{$consultaVuelo->id}}"
                                        action="{{ route('rutaeliminarVueloAdm', ['id' => $consultaVuelo->id]) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm"
                                            onclick="confirmarVuelo({{$consultaVuelo->id}})">
                                            {{ __('Eliminar') }}
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>

        <!-- Panel de Control -->
        <div class="panelControl p-4 shadow-sm rounded d-flex flex-column align-items-center">
            <h3 class="mb-3">Panel de Control</h3>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vuelos Registrados</h5>
                        <p class="card-text">{{ $numeroVuelos }}</p>
                    </div>
                </div>
            </div>
            <div class="row text-center g-4">
            </div>
            <div class="mt-4">
                <a href="{{ route('reportes.vuelos.pdf') }}" class="btn btn-danger me-2">Exportar PDF</a>
                <a href="{{ route('reportes.vuelos.excel') }}" class="btn btn-success">Exportar Excel</a>
            </div>
        </div>


        <script>
            function confirmarVuelo(vueloid) {
                Swal.fire({
                    title: "Quieres eliminar este vuelo?",
                    showCancelButton: true,
                    confirmButtonText: "Eliminar",
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(`deleteForm${vueloid}`).submit();
                    }
                });
            }
        </script>


        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection