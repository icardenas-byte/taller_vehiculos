<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="../public/estilos.css">
</head>
<body>
<a class="btn-volver" href="../Alquiler_vehiculos/index.php">← Volver al menú</a>
<hr>
<h2>Clientes Registrados</h2>
<a href="../Alquiler_vehiculos/index.php?c=clientes&a=crear">Agregar Cliente</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Contacto</th>
        <th>Licencia</th>
    </tr>
    <?php while ($c = mysqli_fetch_assoc($lista)) { ?>
    <tr>
        <td><?= $c['id'] ?></td>
        <td><?= $c['nombre'] ?></td>
        <td><?= $c['contacto'] ?></td>
        <td><?= $c['licencia'] ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>

