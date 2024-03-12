<?php

require_once "conexion.php";

class ModeloPropietarios{

    static public function mdlMostrarpropietarios(){

        $stmt = conexion::conectar()->prepare("SELECT id_propietario,nombre_propietario,identificacion, 'X' as acciones FROM propietario");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt = null;
    }

    static public function mdlRegistrarPropietarios($nombre_propietario,$identificacion){

        $stmt = Conexion::conectar()->prepare("INSERT INTO propietario (nombre_propietario,identificacion) VALUES (:nombre_propietario,:identificacion)");

        $stmt -> bindParam(":nombre_propietario",$nombre_propietario, PDO::PARAM_STR);
        $stmt -> bindParam(":identificacion",$identificacion, PDO::PARAM_STR);

        if($stmt -> execute()){
            return "EL REGISTRO SE AGREGO CORRECTAMENTE?...";
        }else{
            return "ERROR, AL REGISTRAR EL REGISTRO?..."; 
        }
        $stmt = null;
    }

    static public function mdlEliminarPropietarios($id_propietario){

        $stmt = Conexion::conectar()->prepare("DELETE FROM propietario WHERE id_propietario = :id_propietario");

        $stmt -> bindParam(":id_propietario", $id_propietario, PDO::PARAM_INT);

        if($stmt -> execute()){
            return "EL REGISTRO SE ELIMINAR CORRECAMENTE?...";
        }else{
            return "ERROR, NO SE PUDO ELIMINAR EL REGISTRO?...";

        }
        $stmt = null;
    }

    static public function mdlActualizarPropietarios($id_propietario,$nombre_propietario,$identificacion){

        $stmt = Conexion::conectar()->prepare("UPDATE propietario 
                                                SET nombre_propietario = :nombre_propietario,
                                                    identificacion = :identificacion
                                                WHERE id_propietario = :id_propietario");
        $stmt -> bindParam(":id_propietario",$id_propietario, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_propietario",$nombre_propietario, PDO:: PARAM_STR);
        $stmt -> bindParam(":identificacion",$identificacion, PDO:: PARAM_STR);
        
        if($stmt -> execute()){
            return "EL REGISTRO DE ACTUALIZÓ CORRECTAMENTE?...";
        }else{
            return "ERROR, NO SE PUDO ACTUALIZAR EL REGISTRO?...";
        }
    }
}




?>