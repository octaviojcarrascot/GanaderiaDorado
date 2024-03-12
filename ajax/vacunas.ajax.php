<?php

    require_once "../controladores/vacunas.controlador.php";
    require_once "../modelos/vacunas.modelo.php";

    class ajaxVacunas{

        public function MostrarVacunas(){

            $respuesta = ControladorVacunas::ctrMostrarVacunas();

            echo json_encode($respuesta);
        }
    }
    $respuesta = new ajaxVacunas();
    $respuesta -> MostrarVacunas();


?>