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

        <!-- Gestión de Usuarios -->
        <div class="gestionUsuarios p-4 mb-4 shadow-sm rounded">
            <h1 class="text-center mb-4">Panel de Administración</h1>
            <h3 class="mb-3">Gestión de Usuarios</h3>

            <form action="/Administrador" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <!-- <label class="form-label">Nombre</label> -->
                        <input type="text" name="txtnombreadm" class="form-control" placeholder="Nombre del usuario"
                            value="{{ old('txtnombreadm') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtnombreadm')}}</small>
                    </div>
                    <div class="col-md-4">
                        <!-- <label class="form-label">Apellido</label> -->
                        <input type="text" name="txtapellidoadm" class="form-control" placeholder="Apellido del usuario"
                            value="{{ old('txtapellidoadm') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtapellidoadm')}}</small>
                    </div>
                    <div class="col-md-4">
                        <!-- <label class="form-label">Correo</label> -->
                        <input type="text" name="txtemailadm" class="form-control" placeholder="Correo"
                            value="{{ old('txtemailadm') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtemailadm')}}</small>
                    </div>
                    <div class="col-md-4">
                        <!-- <label class="form-label">Teléfono</label> -->
                        <input type="text" name="txttelefonoadm" class="form-control" placeholder="Teléfono"
                            value="{{ old('txttelefonoadm') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txttelefonoadm')}}</small>
                    </div>
                    <div class="col-md-4">
                        <!-- <label class="form-label">Contraseña</label> -->
                        <input type="text" name="txtpasswordadm" class="form-control" placeholder="Contraseña"
                            value="{{ old('txtpasswordadm') }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtpasswordadm')}}</small>
                    </div>
                    <div class="col-md-4">
                        <!-- <label class="form-label">Rol</label> -->
                        <select name="rol" class="form-select">
                            <option value="Administrador">Administrador</option>
                            <option value="Usuario">Usuario</option>
                        </select>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary mt-3">Guardar Usuario</button>
            </form>

            <!-- Tabla de Usuarios -->
            <table class="table table-striped table-hover mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if($consultaUsuarios->isEmpty())
                        <tr>
                            <td colspan="9">No hay usuarios registrados.</td>
                        </tr>
                    @else
                        @foreach($consultaUsuarios as $consultaUsuario)
                            <tr>
                                <td>{{ $consultaUsuario->id }}</td>
                                <td>{{ $consultaUsuario->nombre }}</td>
                                <td>{{ $consultaUsuario->apellido }}</td>
                                <td>{{ $consultaUsuario->correo}}</td>
                                <td>{{ $consultaUsuario->telefono}}</td>
                                <td>{{ $consultaUsuario->rol}}</td>
                                <td>
                                    <form id="delatefom{{$consultaUsuario->id}}"
                                        action="{{ route('rutaeliminarUsuarioAdm', ['id' => $consultaUsuario->id]) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm"
                                            onclick="confirmarUsuario({{$consultaUsuario->id}})">
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

        <!-- Gestión de Hoteles -->
        <div class="gestionHoteles p-4 mb-4 shadow-sm rounded">
            <h3 class="mb-3">Gestión de Hoteles</h3>

            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="hotelName" class="form-label">Nombre del Hotel</label>
                        <input type="text" id="hotelName" class="form-control" placeholder="Nombre del hotel">
                    </div>
                    <div class="col-md-6">
                        <label for="hotelLocation" class="form-label">Ubicación</label>
                        <input type="text" id="hotelLocation" class="form-control" placeholder="Ubicación del hotel">
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
                        <th>Políticas</th>
                        <th>Disponibilidad</th>
                    </tr>
                </thead>
                
            </table>
        </div>

        <!-- Gestión de Vuelos -->
        <div class="gestionHoteles p-4 mb-4 shadow-sm rounded">
            <h3 class="mb-3">Gestión de Vuelos</h3>

            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="hotelName" class="form-label">Número de vuelo</label>
                        <input type="text" id="hotelName" class="form-control" placeholder="Número de vuelo">
                    </div>
                    <div class="col-md-6">
                        <label for="hotelLocation" class="form-label">Destino</label>
                        <input type="text" id="hotelLocation" class="form-control" placeholder="Destino">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Guardar Vuelo</button>
            </form>

            <!-- Tabla de Vuelos -->
            <table class="table table-striped table-hover mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>Número</th>
                        <th>Destino</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vuelo 4</td>
                        <td>Ciudad de México</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
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
        function confirmarUsuario(usuarioid) {
            Swal.fire({
                title: "Quieres eliminar este usuario?",
                showCancelButton: true,
                confirmButtonText: "Save",
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delatefom${usuarioid}`).submit();
                }
            });
        }
    </script>
    <script>
        function confirmarHotel(hotelid) {
            Swal.fire({
                title: "Quieres eliminar este hotel?",
                showCancelButton: true,
                confirmButtonText: "Save",
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