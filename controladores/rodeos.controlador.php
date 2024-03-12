<?php

    class ControladorRodeos{

        static public function ctrMostrarRodeos(){

            $respuesta = ModeloRodeos::mdlMostrarRodeos();

            return $respuesta;
        }
        
        static public function ctrRegistrarRodeos($nombre_rodeo){

            $respuesta = ModeloRodeos::mdlRegistrarRodeos($nombre_rodeo);

            return $respuesta;
        } 

        static public function ctrEliminarRodeos($id_rodeo){

            $respuesta = ModeloRodeos::mdlEliminarRodeos($id_rodeo);

            return $respuesta;

        }
        static public function ctrActualizarRodeos($id_rodeo, $nombre_rodeo){

            $respuesta = ModeloRodeos::mdlActualizarRodeos($id_rodeo, $nombre_rodeo);

            return $respuesta;
        }
    }


?>