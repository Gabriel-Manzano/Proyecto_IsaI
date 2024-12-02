<!DOCTYPE html>
<html>

<head>
    <title>Reporte de Usuarios</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Reporte de Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultaUsuarios as $consultaUsuario)
                <tr>
                    <td>{{ $consultaUsuario->id }}</td>
                    <td>{{ $consultaUsuario->nombre }}</td>
                    <td>{{ $consultaUsuario->apellido }}</td>
                    <td>{{ $consultaUsuario->correo}}</td>
                    <td>{{ $consultaUsuario->telefono}}</td>
                    <td>{{ $consultaUsuario->rol}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>