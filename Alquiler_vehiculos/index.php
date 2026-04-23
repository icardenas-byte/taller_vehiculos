<?php
$c = $_GET['c'] ?? null;
$a = $_GET['a'] ?? null;
if ($c && $a) {
    $archivo = "../controllers/" . ucfirst($c) . "Controllers.php";
    if (file_exists($archivo)) {
        require_once $archivo;
        $clase = ucfirst($c) . "Controllers";
        $obj = new $clase();
        if (method_exists($obj, $a)) {
            $obj->$a();
            exit;
        }
    }
    echo "Ruta no válida";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Principal</title>
    <link rel="stylesheet" href="../public/estilos.css">
</head>
<body>
<h1>Sistema de Taller de Vehículos</h1>
<div class="inicio-contenedor">
    <a class="boton-inicio" href="index.php?c=vehiculo&a=index">
        Registrar Vehículos
    </a>
    <a class="boton-inicio" href="index.php?c=clientes&a=index">
        Registrar Clientes
    </a>
    <a class="boton-inicio" href="index.php?c=reservas&a=index">
        Registrar Reservas
    </a>
</div>
</body>
</html>





