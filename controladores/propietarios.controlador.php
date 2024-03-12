<?php

    class ControladorPropietarios{

         static public function ctrMostrarPropietarios(){

            $respuesta = ModeloPropietarios::mdlMostrarPropietarios();
            
            return $respuesta;
        }

        static public function ctrRegistrarPropietarios($nombre_propietario,$identificacion){

            $respuesta = ModeloPropietarios::mdlRegistrarPropietarios($nombre_propietario, $identificacion);

            return $respuesta;
        }

        static public function crtEliminarPropietarios($id_propietario){

            $respuesta = ModeloPropietarios::mdlEliminarPropietarios($id_propietario);

            return $respuesta;

        }
        static public function ctrActualizarPropietarios($id_propietario,$nombre_propietario,$identificacion){

            $respuesta = ModeloPropietarios::mdlActualizarPropietarios($id_propietario,$nombre_propietario,$identificacion);

            return $respuesta;
        }
    }

?>