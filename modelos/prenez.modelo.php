<?php

        require_once "conexion.php";

        class ModeloPrenez{

            static public function mdlMostrarPrenez(){

                $stmt = conexion::conectar()->prepare("SELECT id_prenez,id_servicio,id_ganado,tacto,peso,id_rodeo,fechaprenez, 'X' as acciones FROM prenez");

                $stmt -> execute();

                return $stmt -> fetchAll();

                $stmt = null;

            }
        }

        /*$prenez = ModeloPrenez::mdlMostrarPrenez();
        print_r($prenez);*/


?>