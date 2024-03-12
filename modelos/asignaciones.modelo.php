<?php

    require_once "conexion.php";

    class ModeloAsignaciones{

        public function mdlMostrarAsignaciones(){

          // $stmt = conexion::conectar()->prepare("SELECT ganado.id_ganado,ganado.caravana,ganado.estatus 'x' as acciones FROM ganado");
            $stmt = conexion::conectar()->prepare("SELECT ganado.id_ganado,ganado.caravana,ganado.sexo,
                                                          ganado.estatus,ganado.peso,ganado.ubicacion,ganado.ubicacion as acciones
                                                    FROM ganado");
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

    }

    /*
        SELECT ganado.id_ganado,ganado.caravana,feedlot.id_feedlot,
                feedlot.fecha_feedlot,evaluacion.id_evaluacion,
                evaluacion.estatus, servicios.id_servicio,
                servicios.fecha_servicio,prenez.id_prenez,
                prenez.fechaprenez,prenez.tacto,prenez.id_rodeo 
        FROM ganado 
                LEFT JOIN feedlot ON ganado.id_ganado = feedlot.id_ganado 
                LEFT JOIN evaluacion ON ganado.id_ganado = evaluacion.id_ganado 
                LEFT JOIN servicios ON evaluacion.id_evaluacion = servicios.id_evaluacion 
                LEFT JOIN prenez ON servicios.id_servicio = prenez.id_servicio
                
    */

    ?>