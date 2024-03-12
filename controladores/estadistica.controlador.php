<?php

    class ControladorEstadistica{

        static public function ctrMostrarEStadistica(){

            $respuesta = ModeloEstadistica::mdlMostrarEstadistica();

            return $respuesta;

        }
    }





?>