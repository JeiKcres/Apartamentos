<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Dueños</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Lista de Dueños</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($duenios as $duenio)
            <tr>
                <td>{{ $duenio->idDuenio}}</td>
                <td>{{ $duenio->nombre }}</td>
                <td>{{ $duenio->apellido }}</td>
                <td>{{ $duenio->correo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

