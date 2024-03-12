<?php

    require_once "conexion.php";

    class MOdeloUsuarios{

        static public function mdlMostrarUsuarios(){

            $stmt = conexion::conectar()->prepare("SELECT id_usu,nombre_usu,apellido_usu,usuario,clave,estatus,perfil, 'X' as acciones FROM usuario");

            $stmt -> execute();

            return $stmt -> fetchAll();

            $stmt = null;
        }
        static public function mdlRegistrarUsuarios($nombre_usu,$apellido_usu,$usuario,$clave,$estatus,$perfil){

            $stmt = Conexion::conectar()->prepare("INSERT INTO usuario (nombre_usu,apellido_usu,usuario,clave,estatus,perfil)VALUES(:nombre_usu,:apellido_usu,:usuario,:clave,:estatus,:perfil)");

            $stmt -> bindparam(":nombre_usu",$nombre_usu, PDO::PARAM_STR);
            $stmt -> bindParam("apellido_usu",$apellido_usu,PDO::PARAM_STR);
            $stmt -> bindParam("usuario",$usuario,PDO::PARAM_STR);
            $stmt -> bindParam("clave",$clave,PDO::PARAM_STR);
            $stmt -> bindParam("estatus",$estatus,PDO::PARAM_STR);
            $stmt -> bindParam("perfil",$perfil,PDO::PARAM_STR);

            if($stmt -> execute()){
                return "EL REGISTRO SE AGREGO CORRECTAMENTE?...";
            }else{
                return "ERROR, AL REGISTRAR EL REGISTRO?...";
            }
            $stmt = null;

        }
        static public function mdlEliminarUsuarios($id_usu){

            $stmt = Conexion::conectar()->prepare("DELETE FROM usuario WHERE id_usu = :id_usu");

            $stmt ->bindParam(":id_usu",$id_usu, PDO::PARAM_INT);

            if($stmt -> execute()){
                return "EL REGISTRO SE ELIMINAR CORRECAMENTE?...";
            }else{
                return "ERROR, NO SE PUDO ELIMINAR EL REGISTRO?...";  
            }
            $stmt = null;
        }
        static public function mdlActualizarUsuarios($id_usu,$nombre_usu,$apellido_usu,$usuario,$clave,$estatus,$perfil){

            $stmt = Conexion::conectar()->prepare("UPDATE usuario
                                                   SET nombre_usu = :nombre_usu,
                                                       apellido_usu = :apellido_usu,
                                                       usuario = :usuario,
                                                       clave = :clave,
                                                       estatus = :estatus,
                                                       perfil = :perfil
                                                   WHERE id_usu = :id_usu");
            $stmt -> bindParam(":id_usu",$id_usu, PDO::PARAM_INT);
            $stmt -> bindparam(":nombre_usu",$nombre_usu, PDO::PARAM_STR);
            $stmt -> bindParam("apellido_usu",$apellido_usu, PDO::PARAM_STR);
            $stmt -> bindParam("usuario",$usuario, PDO::PARAM_STR);
            $stmt -> bindParam("clave",$clave, PDO::PARAM_STR);
            $stmt -> bindParam("estatus",$estatus, PDO::PARAM_STR);
            $stmt -> bindParam("perfil",$perfil, PDO::PARAM_STR);

             if($stmt -> execute()){

            return "EL REGISTRO SE ACTUALIZÓ CORRECTAMENTE?...";

             }else{

            return "ERROR, NO SE PUDO ACTUALIZAR EL REGISTRO?...";

            }

        }

    }

 

?>