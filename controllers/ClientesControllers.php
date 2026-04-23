<?php
require_once "../models/clientes.php";
class ClientesControllers {
    public function index() {
        $cliente = new Clientes();
        $lista = $cliente->obtener();
        include "../views/clientes_listas.php";
    }
    public function crear() {
        include "../views/clientes_form.php";
    }
    public function guardar() {
        $cliente = new Clientes();
        $cliente->guardar($_POST);
        header("Location: ../Alquiler_vehiculos/index.php?c=clientes&a=index");
    }
}
?>

