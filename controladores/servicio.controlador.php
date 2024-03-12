<?php

    class ControladorServicios{

        static public function ctrMostrarServicios(){

            $respuesta = ModeloServicios::mdlMostrarServicios();

            return $respuesta;
        }
    }


?>