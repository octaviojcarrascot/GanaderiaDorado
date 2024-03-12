<?php

    class ControladorGanados{

        static public function ctrMostrarGanados(){

            $respuesta = ModeloGanados::mdlMostrarGanados();

            return $respuesta;
        }
        static public function ctrRegistrarGanados($caravana,$numero,$sexo,$categoria,$pesos,$id_raza,$id_propietario,$id_rodeo,$fecha_nac){

            $respuesta = ModeloGanados::mdlRegistrarGanados($caravana,$numero,$sexo,$categoria,$pesos,$id_raza,$id_propietario,$id_rodeo,$fecha_nac);

            return $respuesta;

        }
        static public function ctrEliminarGanados($id_ganado){

            $respuesta = ModeloGanados::mdlEliminarGanados($id_ganado);

            return $respuesta;

        }
        static public function ctrActualizarGanados($id_ganado,$caravana,$numero,$sexo,$categoria,$estatus,$pesos,$id_raza,$id_propietario,$id_rodeo,$edad,$fecha_nac){

            $respuesta = ModeloGanados::mdlActualizarGanados($id_ganado,$caravana,$numero,$sexo,$categoria,$estatus,$pesos,$id_raza,$id_propietario,$id_rodeo,$edad,$fecha_nac);

            return $respuesta;
        }


    }


?>