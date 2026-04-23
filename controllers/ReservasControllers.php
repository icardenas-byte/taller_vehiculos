<?php
require_once "../models/reservas.php";
class ReservasControllers {
    public function index() {
        $reserva = new Reservas();
        $lista = $reserva->obtener();
        include "../views/reservas_listas.php";
    }
    public function crear() {
        include "../views/reservas_form.php";
    }
    public function guardar() {
        $reserva = new Reservas();
        $reserva->guardar($_POST);
        header("Location: ../Alquiler_vehiculos/index.php?c=reservas&a=index");
    }
}
?>

