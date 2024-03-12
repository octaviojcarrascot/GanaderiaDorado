<?php

    class conexion{
            static public function conectar(){

                /*$con =new PDO("mysql:host=localhost;dbname=octasist_dbganaderia",
                                "octasist_dbganaderia",
                                "16875876OCT",
                                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));

                return $con;*/
                

                 $con =new PDO("mysql:host=localhost;dbname=dbganaderia",
                                "root",
                                "",
                                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));

                return $con;

                
                /*if($con)
                    {
                        echo "Conectado";
                    }else{
                        echo "No se Conecta";
                    }*/
            }
    }
   $conexion = new Conexion();
   $conexion -> conectar(); 
?>