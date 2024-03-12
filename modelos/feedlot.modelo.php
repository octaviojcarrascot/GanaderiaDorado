<?php

    require_once "conexion.php";

    class ModeloFeedlot{

        static public function mdlMostrarFeedlot(){

            $stmt = conexion::conectar()->prepare("SELECT id_feedlot,nombre_feedlot,fecha_feedlot,comentario,peso, 'X' as acciones FROM feedlot");

            $stmt -> execute();

            return $stmt -> fetchAll();

            $stmt = null;
        }
        static public function mdlRegistrarFeedlot($nombre_feedlot,$fecha_feedlot,$id_ganado,$comentario,$peso){

            $stmt = Conexion::conectar()->prepare("INSERT INTO feedlot (nombre_feedlot,fecha_feedlot,id_ganado,comentario,peso)VALUES(:nombre_feedlot,:fecha_feedlot,:id_ganado,:comentario,:peso)");

            $stmt -> bindparam(":nombre_feedlot",$nombre_feedlot, PDO::PARAM_STR);
            $stmt -> bindParam(":fecha_feedlot",$fecha_feedlot,PDO::PARAM_STR);
            $stmt -> bindParam(":id_ganado",$id_ganado,PDO::PARAM_STR);
            $stmt -> bindParam(":comentario",$comentario,PDO::PARAM_STR);
            $stmt -> bindParam(":peso",$peso,PDO::PARAM_STR);
          

            if($stmt -> execute()){
                return "EL REGISTRO SE AGREGO CORRECTAMENTE?...";
            }else{
                return "ERROR, AL REGISTRAR EL REGISTRO?...";
            }
            $stmt = null;

        }
        static public function mdlEliminarFeedlot($id_feedlot){

            $stmt = Conexion::conectar()->prepare("DELETE FROM feedlot WHERE id_feedlot = :id_feedlot");

            $stmt ->bindParam(":id_feedlot",$id_feedlot, PDO::PARAM_INT);

            if($stmt -> execute()){
                return "EL REGISTRO SE ELIMINAR CORRECAMENTE?...";
            }else{
                return "ERROR, NO SE PUDO ELIMINAR EL REGISTRO?...";  
            }
            $stmt = null;
        }
        static public function mdlActualizarFeedlot($id_feedlot,$nombre_feedlot,$fecha_feedlot,$id_ganado,$comentario,$peso){

            $stmt = Conexion::conectar()->prepare("UPDATE feedlot
                                                   SET nombre_feedlot = :nombre_feedlot,
                                                       fecha_feedlot = :fecha_feedlot,
                                                       id_ganado = :id_ganado,
                                                       comentario = :comentario,
                                                       peso = :peso,
                                                   WHERE id_feedlot = :id_feedlot");
            $stmt -> bindParam(":id_feedlot",$id_feedlot, PDO::PARAM_INT);
            $stmt -> bindparam(":nombre_feedlot",$nombre_feedlot, PDO::PARAM_STR);
            $stmt -> bindParam(":fecha_feedlot",$fecha_feedlot,PDO::PARAM_STR);
            $stmt -> bindParam(":id_ganado",$id_ganado,PDO::PARAM_STR);
            $stmt -> bindParam(":comentario",$comentario,PDO::PARAM_STR);
            $stmt -> bindParam(":peso",$peso,PDO::PARAM_STR);

             if($stmt -> execute()){

            return "EL REGISTRO SE ACTUALIZÓ CORRECTAMENTE?...";

             }else{

            return "ERROR, NO SE PUDO ACTUALIZAR EL REGISTRO?...";

            }

        }

    }

 

?>