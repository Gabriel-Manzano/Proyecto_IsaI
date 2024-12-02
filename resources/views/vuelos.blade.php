<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Vuelos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Reporte de Vuelos</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Número de Vuelo</th>
                <th>Aerolínea</th>
                <th>Precio</th>
                <th>Escalas</th>
                <th>Salida</th>
                <th>Regreso</th>
                <th>Duración</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Pasajeros</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vuelos as $vuelo)
                <tr>
                    <td>{{ $vuelo->id }}</td>
                    <td>{{ $vuelo->numero_vuelo }}</td>
                    <td>{{ $vuelo->aerolinea }}</td>
                    <td>{{ $vuelo->precio }}</td>
                    <td>{{ $vuelo->has_stopovers ? 'Sí' : 'No' }}</td>
                    <td>{{ $vuelo->departure_time }}</td>
                    <td>{{ $vuelo->arrival_time }}</td>
                    <td>{{ $vuelo->duracion_vuelo }} min</td>
                    <td>{{ $vuelo->origen }}</td>
                    <td>{{ $vuelo->destino }}</td>
                    <td>{{ $vuelo->pasajeros }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
