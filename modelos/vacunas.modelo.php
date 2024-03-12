<?php

    require_once "conexion.php";

    class MOdeloVacunas{

        static public function mdlMostrarVacunas(){

            $stmt = conexion::conectar()->prepare("SELECT id_vacu,nombre_vacu,fecha_vacu,tipo_vacu,id_rodeo,nombre_vacunador,cantidad_vacu,comentario_vacu, 'X' as acciones FROM vacuna");

            $stmt -> execute();

            return $stmt -> fetchAll();

            $stml = null;

        }
    }
/*$vacunas = ModeloVacunas::mdlMostrarVacunas();

print_r($vacunas);*/


?>