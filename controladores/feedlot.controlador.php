<?php

    class ControladorFeedlot{

        static public function ctrMostrarFeedlot(){

            $respuesta = ModeloFeedlot::mdlMostrarFeedlot();

            return $respuesta;
        }
        static public function ctrRegistrarFeedlot($nombre_feedlot,$fecha_feedlot,$id_ganado,$comentario,$peso){

            $respuesta = ModeloFeedlot::mdlRegistrarFeedlot($nombre_feedlot,$fecha_feedlot,$id_ganado,$comentario,$peso);

            return $respuesta;

        }
        static public function ctrEliminarFeedlot($id_feedlot){

            $respuesta = ModeloFeedlot::mdlEliminarFeedlot($id_feedlot);

            return $respuesta;

        }
        static public function ctrActualizarFeedlot($id_feedlot,$nombre_feedlot,$fecha_feedlot,$id_ganado,$comentario,$peso){

            $respuesta = ModeloFeedlot::mdlActualizarFeedlot($id_feedlot,$nombre_feedlot,$fecha_feedlot,$id_ganado,$comentario,$peso);

            return $respuesta;
        }
    }


?>