<?php
require_once "../config/conexion.php";
class Reservas {
    private $db;
    public function __construct() {
        $this->db = conectar();
    }
    public function obtener() {
        $sql = "SELECT r.id, v.modelo AS vehiculo, c.nombre AS cliente, 
                       r.fecha_inicio, r.fecha_fin
                FROM reservas r
                JOIN vehiculos v ON r.id_vehiculo = v.id
                JOIN clientes c ON r.id_cliente = c.id";
        return mysqli_query($this->db, $sql);
    }
    public function guardar($data) {
        $vehiculo = $data['vehiculo'];
        $cliente = $data['cliente'];
        $inicio = $data['inicio'];
        $fin = $data['fin'];
        $sql = "INSERT INTO reservas (id_vehiculo, id_cliente, fecha_inicio, fecha_fin)
                VALUES ($vehiculo, $cliente, '$inicio', '$fin')";
        return mysqli_query($this->db, $sql);
    }
}
?>

