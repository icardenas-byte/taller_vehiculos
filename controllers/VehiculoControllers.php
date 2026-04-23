<?php
require_once "../models/vehiculos.php";
class VehiculoControllers {
    public function index() {
        $vehiculo = new Vehiculos();
        $lista = $vehiculo->obtener();
        include "../views/vehiculos_listas.php";
    }
    public function crear() {
        include "../views/vehiculos_form.php";
    }

    public function guardar() {
        $vehiculo = new Vehiculos();
        $vehiculo->guardar($_POST);
        header("Location: ../Alquiler_vehiculos/index.php?c=vehiculo&a=index");
    }
}
?>


