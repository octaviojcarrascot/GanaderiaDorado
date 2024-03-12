<?php 

require_once "conexion.php";

class ModeloEstadistica{

    static public function mdlMostrarEstadistica(){

        $stmt = conexion::conectar()->prepare("SELECT COUNT(*) as cantidad_ganado FROM ganado");

        $stmt -> execute();

        return $stmt -> fetch();

        $stmt = null;

    }
}
 










?>