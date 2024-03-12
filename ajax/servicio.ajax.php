<?php
    require_once "../controladores/servicio.controlador.php";
    require_once "../modelos/servicio.modelo.php";

    class ajaxServicios{

        public function MostrarServicios(){

            $respuesta = controladorServicios::ctrMostrarServicios();

            echo json_encode($respuesta);

        }
    }

    $respuesta = new ajaxServicios();
    $respuesta -> MostrarServicios();






?>