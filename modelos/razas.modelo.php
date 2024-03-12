<?php

    require_once "conexion.php";
    
    class ModeloRazas{

        static public function mdlMostrarRazas(){

            $stmt = Conexion::conectar()-> prepare("SELECT id_raza,nombre_raza,color_raza,estado_raza, 'X' as acciones FROM raza");

            $stmt -> execute();

            return $stmt ->fetchAll();

            $stmt = null;
        }

        static public function mdlRegistrarRazas($nombre_raza,$color_raza,$estado_raza){

            $stmt = Conexion::conectar()->prepare("INSERT INTO raza (nombre_raza,color_raza,estado_raza) VALUES (:nombre_raza,:color_raza,:estado_raza)");

            $stmt -> bindParam(":nombre_raza",$nombre_raza, PDO::PARAM_STR);
            $stmt -> bindParam(":color_raza",$color_raza, PDO::PARAM_STR);
            $stmt -> bindParam(":estado_raza",$estado_raza, PDO::PARAM_STR);

            if($stmt -> execute()){
                return "La Raza se Registro Exitosamente...";
            }else{
                return "Error al Registrar los Datos...";
            }

            $stmt = null;


        }
    }

    //$razas = ModeloRazas::mdlMostrarRazas();
    
    //print_r($razas);

?>