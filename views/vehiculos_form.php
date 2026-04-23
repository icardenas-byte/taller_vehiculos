<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Vehículo</title>
    <link rel="stylesheet" href="../public/estilos.css">
</head>
<body>
<a class="btn-volver" href="../Alquiler_vehiculos/index.php">← Volver al menú</a>
<hr>
<h2>Registrar Vehículo</h2>
<form action="../Alquiler_vehiculos/index.php?c=vehiculo&a=guardar" method="POST">
    <label>Marca:</label>
    <input type="text" name="marca" required>
    <label>Modelo:</label>
    <input type="text" name="modelo" required>
    <label>Año:</label>
    <input type="number" name="anio" required>
    <label>Categoría:</label>
    <input type="text" name="categoria" required>
    <label>Estado:</label>
    <select name="estado">
        <option value="disponible">Disponible</option>
        <option value="alquilado">Alquilado</option>
        <option value="mantenimiento">Mantenimiento</option>
    </select>
    <button type="submit">Guardar</button>
</form>
</body>
</html>


