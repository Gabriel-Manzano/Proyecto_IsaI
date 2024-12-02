<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Hoteles</title>
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
    <h1>Reporte de Hoteles</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Precio</th>
                <th>Estrellas</th>
                <th>Disponibilidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hoteles as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->location }}</td>
                    <td>{{ $hotel->price }}</td>
                    <td>{{ $hotel->stars }}</td>
                    <td>{{ $hotel->disponibilidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
