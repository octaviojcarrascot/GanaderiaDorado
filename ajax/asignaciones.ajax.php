<?php

    include_once "../controladores/asignaciones.controlador.php";
    include_once "../modelos/asignaciones.modelo.php";
    //include_once "../controladores/feedlot.controlador.php";
    //include_once "../modelos/feedlot.modelo.php";

    class ajaxAsignaciones{

        public $id_feedlot;
        public $nombre_feedlot;
        public $fecha_feedlot;
        public $id_ganado;
        public $comentario;
        public $peso;

        public function MostrarAsignaciones(){

            $respuesta = ControladorAsignaciones::ctrMostrarAsignaciones();

            echo json_encode ($respuesta);

        }
        public function registrarFeedlot(){

            $respuesta = ControladorFeedlot::ctrRegistrarFeedlot($this->nombre_feedlot,$this->fecha_feedlot,$this->id_ganado,$this->comentario,$this->peso);

            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
        }

    }

     if(!isset($_POST["accion"])){

        $respuesta = new ajaxAsignaciones();
        $respuesta -> MostrarAsignaciones();
        

     }else{

         if($_POST["accion"] == "registrar"){
        
            $insertar = new ajaxAsignaciones();
            $insertar->nombre_feedlot = $_POST["nombre_feedlot"];
            $insertar->fecha_feedlot = $_POST["fecha_feedlot"];
            $insertar->id_ganado = $_POST["id_ganado"];
            $insertar->comentario = $_POST["comentario"];
            $insertar->peso = $_POST["peso"];
            $insertar->registrarFeedlot();

        } 

     }
     ?>