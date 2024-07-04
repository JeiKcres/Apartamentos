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

    <div class="form-container">
        <form action="{{route('propiedade.guardar')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="piso">Piso:</label>
                <input type="text" id="piso" name="piso" required>
            </div>
            <div class="form-group">
                <label for="area">Area:</label>
                <input type="text" id="area" name="area"  required>
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" id="color" name="color"  required>
            </div>
            <div class="form-group">
                <label for="idDuenio">idDuenio:</label>
                <input type="text" id="idDuenio" name="idDuenio"  required>
            </div>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado"  required>
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>
