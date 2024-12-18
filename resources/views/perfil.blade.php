@extends('layouts.plantilla1')

@section('title', 'Inicio')

@section('content')

    <head>
        <title>Gestión de Usuario</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/perfilUsuario.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/componentes.css') }}" />

    </head>

    <body>
        <div class="container mt-5">
            <div class="profile-container">
                <div class="profile-header">
                    <img src="https://via.placeholder.com/80" alt="Foto de perfil">
                    <h3>Gestión de Cuenta</h3>
                </div>
                <form>
                    <!-- Información Personal -->
                    <h5>Información Personal</h5>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Completo</label>
                        <input type="text" id="nombre" class="form-control" placeholder="Escribe tu nombre completo">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" id="email" class="form-control" placeholder="correo@ejemplo.com" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" id="telefono" class="form-control" placeholder="+52 123 456 7890">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <textarea id="direccion" class="form-control" rows="2" placeholder="Tu dirección"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Actualizar Foto de Perfil</label>
                        <input type="file" id="foto" class="form-control">
                    </div>

                    <h5 class="mt-4">Reservas</h5>
                    <div class="d-flex flex-wrap justify-content-between">
                        @foreach ($reservaciones as $reservacion)
                        <div class="card mb-3" style="width: 48%;">
                            <div class="card-body">
                                @if ($reservacion->hotel && $reservacion->hotel->name)
                                    <h6 class="card-title">{{ $reservacion->hotel->name }}</h6>
                                    <p class="card-text">Fecha: {{ $reservacion->fecha_reserva }}</p>
                                    <p class="card-text">Estado: {{ $reservacion->estado}}</p>

                                @elseif($reservacion->vuelo && $reservacion->vuelo->aerolinea)
                                    <h6 class="card-title">{{ $reservacion->vuelo->aerolinea}}</h6>
                                    <p class="card-text">Origen: {{ $reservacion->vuelo->origen }}</p>
                                    <p class="card-text">Destino: {{ $reservacion->vuelo->destino }}</p>
                                    <p class="card-text">Fecha: {{ $reservacion->fecha_reserva }}</p>
                                    <p class="card-text">Estado: {{ $reservacion->estado}}</p>
                                @else
                                    <p>No hay información de la reserva disponible.</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    
                    </div>

                    <h5 class="mt-4">Configuración</h5>
                    <div class="mb-3 form-check">
                        <input type="checkbox" id="notificaciones" class="form-check-input">
                        <label for="notificaciones" class="form-check-label">Recibir notificaciones por correo</label>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Guardar Cambios</button>
                        <button class="btn btn-secondary">Cerrar Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
