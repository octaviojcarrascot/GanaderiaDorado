<?php

    class ControladorUsuarios{

        static public function ctrMostrarUsuarios(){

            $respuesta = ModeloUsuarios::mdlMostrarUsuarios();

            return $respuesta;
        }
        static public function ctrRegistrarUsuarios($nombre_usu,$apellido_usu,$usuario,$clave,$estatus,$perfil){

            $respuesta = ModeloUsuarios::mdlRegistrarUsuarios($nombre_usu,$apellido_usu,$usuario,$clave,$estatus,$perfil);

            return $respuesta;

        }
        static public function ctrEliminarUsuarios($id_usu){

            $respuesta = ModeloUsuarios::mdlEliminarUsuarios($id_usu);

            return $respuesta;

        }
        static public function ctrActualizarUsuarios($id_usu,$nombre_usu,$apellido_usu,$usuario,$clave,$estatus,$perfil){

            $respuesta = ModeloUsuarios::mdlActualizarUsuarios($id_usu,$nombre_usu,$apellido_usu,$usuario,$clave,$estatus,$perfil);

            return $respuesta;
        }
    }


?>