<?php
    
    require_once "../controladores/fallecimientos.controlador.php";
    require_once "../modelos/fallecimientos.modelo.php";

    class ajaxFallecimientos{

        public function MostrarFallecimientos(){

            $respuesta = ControladorFallecimientos::ctrMostrarFallecimientos();

            echo json_encode ($respuesta);
        }
    }
    $respuesta = new ajaxFallecimientos();
    $respuesta -> MostrarFallecimientos();


?>