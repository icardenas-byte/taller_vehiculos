<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservas</title>
    <link rel="stylesheet" href="../public/estilos.css">
</head>
<body>
<a class="btn-volver" href="../Alquiler_vehiculos/index.php">← Volver al menú</a>
<hr>
<h2>Reservas Registradas</h2>
<a href="../Alquiler_vehiculos/index.php?c=reservas&a=crear">Crear Reserva</a>
<table>
    <tr>
        <th>ID</th>
        <th>Vehículo</th>
        <th>Cliente</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
    </tr>
    <?php while ($r = mysqli_fetch_assoc($lista)) { ?>
    <tr>
        <td><?= $r['id'] ?></td>
        <td><?= $r['vehiculo'] ?></td>
        <td><?= $r['cliente'] ?></td>
        <td><?= $r['fecha_inicio'] ?></td>
        <td><?= $r['fecha_fin'] ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
