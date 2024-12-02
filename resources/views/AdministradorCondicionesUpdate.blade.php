@extends('layouts.plantilla1')

@section('title', 'Administración')

@section('content')

<head>
    <title>Gestión de Condiciones</title>
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
            <h3 class="mb-3">Gestión de Condiciones</h3>

            <form action="{{route('rutaactualizarCondicionAdm', ['id' => $Condicion->id]) }}" method="POST">
                @csrf
                @method('PUT') <!-- Para indicar que es una actualización -->
                <div class="row g-3">
                    <div class="col-md-12">
                        <textarea name="condiciones" class="form-control" placeholder="Condiciones de Uso"
                            rows="10">{{ old('condiciones', $Condicion->condiciones) }}</textarea>
                        <small class="fst-italic text-danger">{{ $errors->first('condiciones') }}</small>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Actualizar Condición</button>
            </form>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection