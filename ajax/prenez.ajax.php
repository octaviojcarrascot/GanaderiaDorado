<?php

    require_once "../controladores/prenez.controlador.php";
    require_once "../modelos/prenez.modelo.php";


    class ajaxPrenez{

        public function MostrarPrenez(){

            $respuesta = controladorPrenez::ctrMostrarPrenez();

            echo json_encode($respuesta);


        }
        
    }
    $respuesta = new ajaxPrenez();
    $respuesta -> MostrarPrenez();


?>