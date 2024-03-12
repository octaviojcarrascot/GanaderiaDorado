<?php

    class ControladorVacunas{

        static public function ctrMostrarVacunas(){

            $respuesta = ModeloVacunas::mdlMostrarVacunas();

            return $respuesta;
        }
    }



?>