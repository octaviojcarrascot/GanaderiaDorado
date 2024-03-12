<?php

 class ControladorAsignaciones{

        static public function ctrMostrarAsignaciones(){

            $respuesta = ModeloAsignaciones::mdlMostrarAsignaciones();

            return $respuesta;
        }

       static public function ctrRegistrarFeedlot($nombre_feedlot,$fecha_feedlot,$id_ganado,$comentario,$peso){

            $respuesta = ModeloFeedlot::mdlRegistrarFeedlot($nombre_feedlot,$fecha_feedlot,$id_ganado,$comentario,$peso);

            return $respuesta;

        }
 }

?>