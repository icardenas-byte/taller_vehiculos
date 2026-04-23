<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vehículos</title>
    <link rel="stylesheet" href="../public/estilos.css">
</head>
<body>
<a class="btn-volver" href="../Alquiler_vehiculos/index.php">← Volver al menú</a>
<hr>
<h2>Vehículos Registrados</h2>
<a href="../Alquiler_vehiculos/index.php?c=vehiculo&a=crear">Agregar Vehículo</a>
<table>
    <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Año</th>
        <th>Categoría</th>
        <th>Estado</th>
    </tr>
    <?php while ($v = mysqli_fetch_assoc($lista)) { ?>
    <tr>
        <td><?= $v['id'] ?></td>
        <td><?= $v['marca'] ?></td>
        <td><?= $v['modelo'] ?></td>
        <td><?= $v['anio'] ?></td>
        <td><?= $v['categoria'] ?></td>
        <td><?= $v['estado'] ?></td>
    </tr>
    <?php } ?>

</table>
</body>
</html>


