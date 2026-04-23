<?php
require_once "../config/conexion.php";
class Vehiculos {
    private $db;
    public function __construct() {
        $this->db = conectar();
    }
    public function obtener() {
        $sql = "SELECT * FROM vehiculos";
        return mysqli_query($this->db, $sql);
    }
    public function guardar($data) {
        $marca = $data['marca'];
        $modelo = $data['modelo'];
        $anio = $data['anio'];
        $categoria = $data['categoria'];
        $estado = $data['estado'];
        $sql = "INSERT INTO vehiculos (marca, modelo, anio, categoria, estado)
                VALUES ('$marca', '$modelo', $anio, '$categoria', '$estado')";

        return mysqli_query($this->db, $sql);
    }
}
?>


