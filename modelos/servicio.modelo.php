<?php

    require_once "conexion.php";

    class ModeloServicios{

        static public function mdlMostrarServicios(){

            $stmt = conexion::conectar()->prepare("SELECT id_evaluacion,id_ganado,peso,estatus,fechaevalua, 'X' as accion FROM evaluacion");

            $stmt -> execute();

            return $stmt -> fetchAll();

            $stmt = null;
        }
    }

   /* $servicio = ModeloServicios::mdlMostrarServicios();
    print_r($servicio);*/





?>