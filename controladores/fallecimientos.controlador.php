<?php

    class ControladorFallecimientos{

        static public function ctrMostrarFallecimientos(){

            $respuesta = ModeloFallecimientos::mdlMostrarFallecimientos();

            return $respuesta;
        }
    }


?>