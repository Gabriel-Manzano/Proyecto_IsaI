@extends('layouts.plantilla1')

@section('title', 'Administración')

@section('content')

<head>
    <title>Actualización Condiciones</title>
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
        <!-- Gestión de Condiciones -->
        <div class="gestionHoteles p-4 mb-4 shadow-sm rounded">
            <h1 class="text-center mb-4">Panel de Administración</h1>
            <h3 class="mb-3">Gestión de Condiciones</h3>


            <!-- Tabla de Condiciones -->
            <table class="table table-striped table-hover mt-4">
                <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Condición de Uso</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @if($condiciones->isEmpty())
                        <tr>
                            <td colspan="2">No hay condiciones registradas.</td>
                        </tr>
                    @else
                        @foreach($condiciones as $condicion)
                            <tr>
                                <td>{{ $condicion->id }}</td>
                                <td>{{ $condicion->condiciones }}</td>
                                <td>
                                    <a href="{{ route('rutaenviarCondicionAdm', ['id' => $condicion->id]) }}"
                                        class="btn btn-warning btn-sm">
                                        {{ __('Editar') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection