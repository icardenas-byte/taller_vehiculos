<?php
function conectar() {
    $conexion = mysqli_connect("localhost", "root", "", "alquiler_vehiculos");
    if (!$conexion) {
        die("Error al conectar: " . mysqli_connect_error());
    }
    return $conexion;
}
?>
