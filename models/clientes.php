<?php
require_once "../config/conexion.php";
class Clientes {
    private $db;
    public function __construct() {
        $this->db = conectar();
    }
    public function obtener() {
        $sql = "SELECT * FROM clientes";
        return mysqli_query($this->db, $sql);
    }
    public function guardar($data) {
        $nombre = $data['nombre'];
        $contacto = $data['contacto'];
        $licencia = $data['licencia'];
        $sql = "INSERT INTO clientes (nombre, contacto, licencia)
                VALUES ('$nombre', '$contacto', '$licencia')";
        return mysqli_query($this->db, $sql);
    }
}
?>

