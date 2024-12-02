@extends('layouts.plantilla1')

@section('content')

    <head>

        <link rel="stylesheet" href="{{ asset('css/componentes.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/stylesHotel.css') }}">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap JS y dependencias -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>



        {{--
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhvQHUFNotF0PR_tL8oBIDX7syw3CbmRY&callback=initMap">
        </script> --}}

    </head>
    <div class="container mt-4">
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <h2>Carrito de Compras</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Fecha de Llegada</th>
                        <th>Fecha de Salida</th>
                        <th>Habitación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carrito as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->correo }}</td>
                            <td>{{ $item->fecha_llegada }}</td>
                            <td>{{ $item->fecha_salida }}</td>
                            <td>{{ $item->tipo_habitacion }}</td>
                            <td>
                                <form action="{{ route('carrito.eliminar', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
