<?php

    class ControladorRazas{

        static public function ctrMostrarRazas(){

            $respuesta = ModeloRazas::mdlMostrarRazas();

            return $respuesta;

        }
        
        static public function ctrRegistrarRazas($nombre_raza,$color_raza,$estado_raza){

            $respuesta = ModeloRazas::mdlRegistrarRazas($nombre_raza,$color_raza,$estado_raza);

            return $respuesta;

        }


    }

?>