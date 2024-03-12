<?php

    require_once "../controladores/feedlot.controlador.php";
    require_once "../modelos/feedlot.modelo.php";

    class ajaxFeedlot{

        public $id_feedlot;
        public $nombre_feedlot;
        public $fecha_feedlot;
        public $id_ganado;
        public $comentario;
        public $peso;

        public function MostrarFeedlot(){

            $respuesta = ControladorFeedlot::ctrMostrarFeedlot();

            echo json_encode($respuesta);

        }
        public function registrarFeedlot(){

            $respuesta = ControladorFeedlot::ctrRegistrarFeedlot($this->nombre_feedlot,$this->fecha_feedlot,$this->id_ganado,$this->comentario,$this->peso);

            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
        }
        public function eliminarFeedlot(){

            $respuesta = ControladorFeedlot::ctrEliminarFeedlot($this->id_feedlot);

            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
        }
        public function actualizarFeedlot(){

            $respuesta = ControladorFeedlot::ctrActualizarFeedlot($this->id_feedlot,$this->nombre_feedlot,$this->fecha_feedlot,$this->id_ganado,$this->comentario,$this->peso);


            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
                                        
        }

           
    }
    //SE EJECUTA LA ACCION GUARDAR, EDITAR, ELIMINAR...
    if(!isset($_POST["accion"])){

        $respuesta = new ajaxFeedlot();
        $respuesta -> MostrarFeedlot();

    }else{

        if($_POST["accion"] == "registrar"){
         
            $insertar = new ajaxFeedlot();
            $insertar->nombre_feedlot = $_POST["nombre_feedlot"];
            $insertar->fecha_feedlot = $_POST["fecha_feedlot"];
            $insertar->id_ganado = $_POST["id_ganado"];
            $insertar->comentario = $_POST["comentario"];
            $insertar->peso = $_POST["peso"];
            $insertar->registrarFeedlot();

        } 
        if($_POST["accion"] == "eliminar"){

            $eliminar = new ajaxFeedlot();
            $eliminar->id_feedlot = $_POST["id_feedlot"];
            $eliminar->eliminarFeedlot();
        }
        if($_POST["accion"] == "actualizar"){

            $actualizar = new ajaxFeedlot();
            $actualizar->id_feedlot = $_POST["id_feedlot"];
            $actualizar->nombre_feedlot = $_POST["nombre_feedlot"];
            $actualizar->id_ganado = $_POST["id_ganado"];
            $actualizar->comentario = $_POST["comentario"];
            $actualizar->peso = $_POST["peso"];
            $actualizar->actualizarFeedlot();

        }
    }


?>