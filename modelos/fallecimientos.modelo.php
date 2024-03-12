<?php

    require_once "conexion.php";

    class ModeloFallecimientos{

        static public function mdlMostrarFallecimientos(){

            //$stmt = conexion::conectar()->prepare("SELECT id_falleci,id_ganado,fecha_falleci,lugar_falleci,comentario, 'X' as acciones FROM fallecimiento");
            $stmt = conexion::conectar()->prepare("SELECT fallecimiento.id_falleci,fallecimiento.id_ganado,
                                                          ganado.caravana, fallecimiento.fecha_falleci,
                                                          fallecimiento.id_rode, fallecimiento.estatus,
                                                          fallecimiento.comentario,'X' as acciones 
                                                   FROM fallecimiento INNER JOIN ganado on fallecimiento.id_ganado = ganado.id_ganado");
            $stmt ->execute();

            return $stmt -> fetchAll();

            $stmt = null;

        }
    }
    /*
    //se realizan las pruebas....
    $fallecimientos = ModeloFallecimientos::mdlMostrarFallecimientos();
    
        print_r($fallecimientos);
*/

?>