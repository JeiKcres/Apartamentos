<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Propiedad</title>
</head>
<body>
    <h2>Agregar Propiedad</h2>
    <h3>Codigo Propiedad: "{{$propiedadEditar->id}}"</h3>
    <div class="form-container">
        <form action="{{route('propiedade.editar.guardar',$propiedadEditar->id )}}" method="PUT">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="piso">Piso:</label>
                <input type="text" id="piso" name="piso" value="{{$propiedadEditar->piso}}" required>
            </div>
            <div class="form-group">
                <label for="area">Area:</label>
                <input type="text" id="area" name="area" value="{{$propiedadEditar->area}}" required>
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" id="color" name="color" value="{{$propiedadEditar->color}}"  required>
            </div>
            <div class="form-group">
                <label for="idDuenio">idDuenio:</label>
                <input type="text" id="idDuenio" name="idDuenio" value="{{$propiedadEditar->idDuenio}}" required>
            </div>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" value="{{$propiedadEditar->estado}}" required>
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>
