@extends('layouts.plantilla1')

@section('title', 'Administración')

@section('content')

<head>
    <title>Gestión de Administradores</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/adminPanel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/componentes.css') }}" />
</head>

<body>
    <div class="container mt-5 p-4 shadow rounded">
        

        <!-- Gestión de Usuarios -->
        <div class="gestionUsuarios p-4 mb-4 shadow-sm rounded">
            <h1 class="text-center mb-4">Panel de Administración</h1>
            <h3 class="mb-3">Gestión de Usuarios</h3>
            <form>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="userName" class="form-label">Nombre</label>
                        <input type="text" id="userName" class="form-control" placeholder="Nombre del usuario">
                    </div>
                    <div class="col-md-4">
                        <label for="userEmail" class="form-label">Correo</label>
                        <input type="email" id="userEmail" class="form-control" placeholder="correo@ejemplo.com">
                    </div>
                    <div class="col-md-4">
                        <label for="userRole" class="form-label">Rol</label>
                        <select id="userRole" class="form-select">
                            <option value="admin">Administrador</option>
                            <option value="staff">Empleado</option>
                            <option value="client">Cliente</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Guardar Usuario</button>
            </form>

            <!-- Tabla de Usuarios -->
            <table class="table table-striped table-hover mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Pérez</td>
                        <td>juan@ejemplo.com</td>
                        <td>Administrador</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
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
                        <th>Nombre</th>
                        <th>Ubicación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hotel XYZ</td>
                        <td>Ciudad de México</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Gestión de Reservas -->
        <div class="gestionReservas p-4 mb-4 shadow-sm rounded">
            <h3 class="mb-3">Gestión de Reservas</h3>
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Cliente</th>
                        <th>Reserva</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Maria López</td>
                        <td>Hotel XYZ (15/11/2024 - 20/11/2024)</td>
                        <td>Confirmada</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Modificar</button>
                            <button class="btn btn-danger btn-sm">Cancelar</button>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
