<?php

    require_once "conexion.php";

    class ModeloGanados{

        static public function mdlMostrarGanados(){

            //$stmt = conexion::conectar()->prepare("SELECT id_ganado,caravana,numero,sexo,categoria,estatus,peso,id_raza,id_propietario,id_rodeo,edad,fecha_nac, 'x' as acciones FROM ganado");
            $stmt = conexion::conectar()->prepare("SELECT ganado.id_ganado,ganado.caravana,ganado.numero,ganado.sexo,ganado.categoria,
                                                          ganado.estatus,ganado.peso,raza.nombre_raza,propietario.nombre_propietario,
                                                          rodeo.nombre_rodeo,ganado.edad,ganado.fecha_nac, 'x' as acciones
                                                    FROM ganado INNER JOIN raza ON ganado.id_raza = raza.id_raza 
                                                                INNER JOIN propietario ON ganado.id_propietario = propietario.id_propietario 
                                                                INNER JOIN rodeo ON ganado.id_rodeo = rodeo.id_rodeo");
            $stmt -> execute();

            return $stmt -> fetchAll();

            $stmt = null;
        }
        static public function mdlRegistrarGanados($caravana,$numero,$sexo,$categoria,$peso,$id_raza,$id_propietario,$id_rodeo,$fecha_nac){

            $stmt = Conexion::conectar()->prepare("INSERT INTO ganado (caravana,numero,sexo,categoria,peso,id_raza,id_propietario,id_rodeo,fecha_nac)VALUES(:caravana,:numero,:sexo,:categoria,:peso,:id_raza,:id_propietario,:id_rodeo,:fecha_nac)");

            $stmt -> bindParam("caravana",$caravana, PDO::PARAM_STR);
            $stmt -> bindParam("numero",$numero, PDO::PARAM_STR);
            $stmt -> bindParam("sexo",$sexo, PDO::PARAM_STR);
            $stmt -> bindParam("categoria",$categoria, PDO::PARAM_STR);
            $stmt -> bindParam("peso",$peso, PDO::PARAM_STR);
            $stmt -> bindParam("id_raza",$id_raza, PDO::PARAM_STR);
            $stmt -> bindParam("id_propietario",$id_propietario, PDO::PARAM_STR);
            $stmt -> bindParam("id_rodeo",$id_rodeo, PDO::PARAM_STR);
            //$stmt -> bindParam("edad",$edad, PDO::PARAM_STR);
            $stmt -> bindParam("fecha_nac",$fecha_nac, PDO::PARAM_STR);

            if($stmt -> execute()){
                return "EL REGISTRO SE AGREGO CORRECTAMENTE?...";
            }else{
                return "ERROR, AL REGISTRAR EL REGISTRO?...";
            }
            $stmt = null;
        }
        static public function mdlEliminarGanados($id_ganado){

            $stmt = Conexion::conectar()->prepare("DELETE FROM ganado WHERE id_ganado = :id_ganado");

            $stmt ->bindParam(":id_ganado",$id_ganado, PDO::PARAM_INT);

            if($stmt -> execute()){
                return "EL REGISTRO SE ELIMINO CORRECTAMENTE?...";
            }else{
                return "ERROR, NO SE PUDO ELIMINAR EL REGISTRO?...";
            }
            $stmt = null;

        }
        static public function mdlActualizarGanados($id_ganado,$caravana,$numero,$sexo,$categoria,$peso,$id_raza,$id_propietario,$id_rodeo){

            $stmt = Conexion::conectar()->prepare("UPDATE ganado
                                                   SET caravana = :caravana,
                                                       numero = :numero,
                                                       sexo = :sexo,
                                                       categoria = :categoria,
                                                      
                                                       peso = :peso,
                                                       id_raza = :id_raza,
                                                       id_propietario = :id_propietario,
                                                       Id_rodeo = :id_rodeo,");
            $stmt -> bindParam(":id_ganado",$id_ganado, PDO::PARAM_INT);
            $stmt -> bindParam(":caravana",$caravana, PDO::PARAM_STR);
            $stmt -> bindParam(":numero",$numero, PDO::PARAM_STR);
            $stmt -> bindParam(":sexo",$sexo, PDO::PARAM_STR);
            $stmt -> bindParam(":categoria",$categoria, PDO::PARAM_STR);
            $stmt -> bindParam(":peso",$peso, PDO::PARAM_STR);
            $stmt -> bindParam(":id_raza",$id_raza, PDO::PARAM_STR);
            $stmt -> bindParam(":id_propietario",$id_propietario, PDO::PARAM_STR);
            $stmt -> bindParam(":id_rodeo",$id_rodeo, PDO::PARAM_STR);
            //$stmt -> bindParam(":edad",$edad, PDO::PARM_STR);
            //$stmt -> bindParam(":fecha_nac",$fecha_nac, PDO::PARAM_STR);

            if($stm -> execute()){

                return "EL REGISTRO SE ACTUALIZÓ CORRETAMENTE?...";
            }else{
                return "ERROR, NO SE PUDO ACTUALIZAR EL REGISTRO?...";
            }
        }
    }

?>