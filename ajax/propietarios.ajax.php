<?php

    require_once "../controladores/propietarios.controlador.php";
    require_once "../modelos/propietarios.modelo.php";

    class ajaxPropietarios{

        public $id_propietario;
        public $nombre_propietario;
        public $identificacion;

        public function MostrarPropietarios(){

            $respuesta = ControladorPropietarios::ctrMostrarPropietarios();

            echo json_encode ($respuesta);

        }
        public function registrarPropietarios(){

            $respuesta = ControladorPropietarios::ctrRegistrarPropietarios($this->nombre_propietario,$this->identificacion);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);

        }
        public function eliminarPropietarios(){

            $respuesta = ControladorPropietarios::crtEliminarPropietarios($this->id_propietario);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);

        }
        public function actualizarPropietarios(){

            $respuesta = ControladorPropietarios::ctrActualizarPropietarios($this->id_propietario,$this->nombre_propietario,$this->identificacion);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);

        }

    }

    //SE EJECUTA LA ACCION DE GUARDAR, EDITAR, ELIMINAR....
    if(!isset($_POST["accion"])){

    //AQUI SE CARGA LA PAGINA...
    $respuesta = new ajaxPropietarios();
    $respuesta -> MostrarPropietarios();

    }else{

        if($_POST["accion"] == "registrar"){

            $insertar = new ajaxPropietarios();
            $insertar->nombre_propietario = $_POST["nombre_propietario"];
            $insertar->identificacion = $_POST["identificacion"];
            $insertar->registrarPropietarios();

        }
        if($_POST["accion"] == "eliminar"){

            $eliminar = new ajaxPropietarios();
            $eliminar->id_propietario = $_POST["id_propietario"];
            $eliminar->eliminarPropietarios();

        }
        if($_POST["accion"] == "actualizar"){

            $actualizar = new ajaxPropietarios();
            $actualizar->id_propietario = $_POST["id_propietario"];
            $actualizar->nombre_propietario = $_POST["nombre_propietario"];
            $actualizar->identificacion = $_POST["identificacion"];
            $actualizar->actualizarPropietarios();
        }
    }
?>