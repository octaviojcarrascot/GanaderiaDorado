<?php

    require_once "conexion.php";

    class ModeloRodeos{
    
    static public function mdlMostrarRodeos(){

        $stmt = conexion::conectar()->prepare("SELECT id_rodeo,nombre_rodeo, 'X' as acciones FROM rodeo");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt = null;


    }

    static public function mdlRegistrarRodeos($nombre_rodeo){

        $stmt = Conexion::conectar()->prepare("INSERT INTO rodeo (nombre_rodeo) VALUES (:nombre_rodeo)");

        $stmt -> bindParam(":nombre_rodeo",$nombre_rodeo, PDO::PARAM_STR);

        if($stmt -> execute()){
            return "EL REGISTRO SE AGREGO CORRECTAMENTE?...";
        }else{
            return "ERROR, AL REGISTRAR EL REGISTRO?...";
        }
        $stmt = null;
    }
    static public function mdlEliminarRodeos($id_rodeo){

        $stmt = Conexion::conectar()->prepare("DELETE FROM rodeo WHERE id_rodeo = :id_rodeo");

        $stmt -> bindParam(":id_rodeo", $id_rodeo, PDO::PARAM_INT);

        if($stmt -> execute()){

            return "EL RODEO SE ELIMINO CORRECTAMENTE...?";

        }else{

            return "ERROR, NO SE PUDO ELIMINAR EL REGISTRO?...?";

        }
        $stmt = null;

    }
    static public function mdlActualizarRodeos($id_rodeo, $nombre_rodeo){

        $stmt = Conexion::conectar()->prepare("UPDATE rodeo 
                                               SET nombre_rodeo = :nombre_rodeo
                                               WHERE id_rodeo = :id_rodeo");

        $stmt -> bindParam(":id_rodeo", $id_rodeo, PDO::PARAM_INT);
        $stmt -> bindParam(":nombre_rodeo",$nombre_rodeo, PDO::PARAM_STR);

        if($stmt -> execute()){

            return "EL RODEO SE ACTUALIZO CORRECTAMENTE...?";

        }else{

            return "ERROR, NO SE PUDO ACTUALIZAR EL RODEO...?";
        }
    }

}


?>