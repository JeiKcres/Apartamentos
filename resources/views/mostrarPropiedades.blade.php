<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Propiedades</title>
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
    <h1>Lista de Propiedades</h1>
    <table>
        <thead>
            <tr>
                <th>ID Propiedad</th>
                <th>Piso</th>
                <th>Area</th>
                <th>Color</th>
                <th>Id Dueño</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($propiedades as $propiedad)
            <tr>
                <td>{{ $propiedad->id}}</td>
                <td>{{ $propiedad->piso }}</td>
                <td>{{ $propiedad->area }}</td>
                <td>{{ $propiedad->color }}</td>
                <td>{{ $propiedad->idDuenio }}</td>
                <td>{{ $propiedad->estado}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
