<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Duenio</title>
</head>
<body>
    <h2>Editar Duenio</h2>
    <h3>Codigo Duenio: "{{$duenioEditar->idDuenio}}"</h3>
    <div class="form-container">
        <form action="{{route('duenio.editar.guardar', $duenioEditar->idDuenio)}}" method="PUT">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value ="{{$duenioEditar->nombre}}" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="descripcion" name="apellido"  value = "{{$duenioEditar->apellido}}" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="text" id="correo" name="correo" value = "{{$duenioEditar->correo}}" required>
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>