<?php

    class ControladorPrenez{

        static public function ctrMostrarPrenez(){

            $respuesta = ModeloPrenez::mdlMOstrarPrenez();

            return $respuesta;
        }
    }



?>