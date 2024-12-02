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

            <form action="{{route('rutaactualizarHotelAdm', ['id' => $Hotel->id]) }}" method="POST">
                @csrf
                @method('PUT')
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
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection