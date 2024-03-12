<?php

    include_once "../controladores/razas.controlador.php";
    include_once "../modelos/razas.modelo.php";

    class ajaxRazas{

        public $nombre_raza;
        public $color_raza;
        public $estado_raza;

        public function MostrarRazas(){

            $respuesta = ControladorRazas::ctrMostrarRazas();
           
            echo json_encode ($respuesta);
            }

        public function registrarRazas(){
            
            $respuesta = ControladorRazas::ctrRegistrarRazas($this->nombre_raza,$this->color_raza,$this->estado_raza);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
            
        }     

    }
    if(!isset($_POST["nombre_raza"])){

        $respuesta = new ajaxRazas();
        $respuesta -> MostrarRazas();

    }else{

        $insertar = new ajaxRazas();
        $insertar->nombre_raza = $_POST["nombre_raza"];
        $insertar->color_raza = $_POST["color_raza"];
        $insertar->estado_raza =$_POST["estado_raza"];
        $insertar->registrarRazas();



    }
        

?>