<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Reserva</title>
    <link rel="stylesheet" href="../public/estilos.css">
</head>
<body>
<a class="btn-volver" href="../Alquiler_vehiculos/index.php">← Volver al menú</a>
<hr>
<h2>Crear Reserva</h2>
<form action="../Alquiler_vehiculos/index.php?c=reservas&a=guardar" method="POST">
    <label>ID Vehículo:</label>
    <input type="number" name="vehiculo" required>
    <label>ID Cliente:</label>
    <input type="number" name="cliente" required>
    <label>Fecha Inicio:</label>
    <input type="date" name="inicio" required>
    <label>Fecha Fin:</label>
    <input type="date" name="fin" required>
    <button type="submit">Guardar</button>
</form>
</body>
</html>

