<?php

    include_once "../controladores/estadistica.controlador.php";
    include_once "../modelos/estadistica.modelo.php";

    class ajaxEstadistica{

        public function MostrarEstadistica(){
            
            $respuesta = Controladorestadistica::ctrMostrarEstadistica();

            echo json_encode ($respuesta);

        }
    }
    if(!isset($_POST["accion"])){

        $respuesta = new ajaxEstadistica();
        $respuesta -> MostrarEstadistica();
        

     }else{

     }






?>