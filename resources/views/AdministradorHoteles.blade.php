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
            <h3 class="mb-3">Gestión de Hoteles</h3>

            <form action="/AdministradorHoteles" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <input type="text" name="txtnameadmhot" class="form-control" placeholder="Nombre del hotel"
                            value="{{ old('txtnameadmhot') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtnameadmhot')}}</small>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="txtubicacionadmhot" class="form-control" placeholder="Ubicación"
                            value="{{ old('txtubicacionadmhot') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtubicacionadmhot')}}</small>
                    </div>
                    <div class="col-md-4">
                        <input type="number" name="txtprecioadmhot" class="form-control" placeholder="Precio"
                            value="{{ old('txtprecioadmhot') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtprecioadmhot')}}</small>
                    </div>
                    <div class="col-md-4">
                        <input type="number" name="txtestrellasadmhot" class="form-control" placeholder="Estrellas"
                            value="{{ old('txtestrellasadmhot') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtestrellasadmhot')}}</small>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="txttipoadmhot" class="form-control" placeholder="Tipo"
                            value="{{ old('txttipoadmhot') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txttipoadmhot')}}</small>
                    </div>
                    <div class="col-md-4">
                        <input type="number" name="txthabitacionesadmhot" class="form-control"
                            placeholder="Número de habitaciones" value="{{ old('txthabitacionesadmhot') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txthabitacionesadmhot')}}</small>
                    </div>
                    <div class="col-md-4">
                        <input type="number" name="txthuespedesadmhot" class="form-control"
                            placeholder="Número de huéspedes" value="{{ old('txthuespedesadmhot') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txthuespedesadmhot')}}</small>
                    </div>
                    <div class="col-md-4">
                        <input type="number" name="txtdistanciaadmhot" class="form-control"
                            placeholder="Distancia al centro (m)" value="{{ old('txtdistanciaadmhot') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtdistanciaadmhot')}}</small>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="txtpoliticasadmhot" class="form-control"
                            placeholder="Políticas de cancelación" value="{{ old('txtpoliticasadmhot') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtpoliticasadmhot')}}</small>
                    </div>
                    <div class="col-md-4">
                        <select name="disponibilidad" class="form-select">
                            <option value="Disponible">Disponible</option>
                            <option value="No disponible">No disponible</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Guardar Hotel</button>
            </form>

            <!-- Tabla de Hoteles -->
            <table class="table table-striped table-hover mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Ubicación</th>
                        <th>Precio</th>
                        <th>Estrellas</th>
                        <th>Tipo</th>
                        <th>Número de habitaciones</th>
                        <th>Número de huéspedes</th>
                        <th>Distacia al centro</th>
                        <th>Políticas de cancelación</th>
                        <th>Disponibilidad</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @if($consultaHoteles->isEmpty())
                        <tr>
                            <td colspan="9">No hay hoteles registrados.</td>
                        </tr>
                    @else
                        @foreach($consultaHoteles as $consultaHotel)
                            <tr>
                                <td>{{ $consultaHotel->id }}</td>
                                <td>{{ $consultaHotel->name }}</td>
                                <td>{{ $consultaHotel->location }}</td>
                                <td>{{ $consultaHotel->price }}</td>
                                <td>{{ $consultaHotel->stars}}</td>
                                <td>{{ $consultaHotel->type}}</td>
                                <td>{{ $consultaHotel->habitaciones}}</td>
                                <td>{{ $consultaHotel->huespedes}}</td>
                                <td>{{ $consultaHotel->distancia}}</td>
                                <td>{{ $consultaHotel->politicas}}</td>
                                <td>{{ $consultaHotel->disponibilidad}}</td>
                                <td>
                                    <form>
                                        <a href="{{ route('rutaenviarHotelAdm', ['id' => $consultaHotel->id]) }}"
                                            class="btn btn-warning btn-sm">
                                            {{ __('Editar') }}
                                        </a>
                                    </form>
                                </td>
                                <td>
                                    <form id="delatefom{{$consultaHotel->id}}"
                                        action="{{ route('rutaeliminarHotelAdm', ['id' => $consultaHotel->id]) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm"
                                            onclick="confirmarHotel({{$consultaHotel->id}})">
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
        <div class="panelControl p-4 shadow-sm rounded">
            <h3 class="mb-3">Panel de Control</h3>
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Reservas Activas</h5>
                            <p class="card-text">32</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Hoteles Ocupados</h5>
                            <p class="card-text">5</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ingresos Totales</h5>
                            <p class="card-text">$150,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmarHotel(hotelid) {
            Swal.fire({
                title: "Quieres eliminar este hotel?",
                showCancelButton: true,
                confirmButtonText: "Eliminar",
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delatefom${hotelid}`).submit();
                }
            });
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection