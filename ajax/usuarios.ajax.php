<?php

    require_once "../controladores/usuarios.controlador.php";
    require_once "../modelos/usuarios.modelo.php";

    class ajaxUsuarios{

        public $id_usu;
        public $nombre_usu;
        public $apellido_usu;
        public $usuario;
        public $clave;
        public $estatus;
        public $perfil;

        public function MostrarUsuarios(){

            $respuesta = ControladorUsuarios::ctrMostrarUsuarios();

            echo json_encode($respuesta);

        }
        public function registrarUsuarios(){

            $respuesta = ControladorUsuarios::ctrRegistrarUsuarios($this->nombre_usu,$this->apellido_usu,$this->usuario,$this->clave,$this->estatus,$this->perfil);

            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
        }
        public function eliminarUsuarios(){

            $respuesta = ControladorUsuarios::ctrEliminarUsuarios($this->id_usu);

            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
        }
        public function actualizarUsuarios(){

            $respuesta = ControladorUsuarios::ctrActualizarUsuarios($this->id_usu,$this->nombre_usu,$this->apellido_usu,$this->usuario,$this->clave,$this->estatus,$this->perfil);


            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
                                        
        }

           
    }
    //SE EJECUTA LA ACCION GUARDAR, EDITAR, ELIMINAR...
    if(!isset($_POST["accion"])){

        $respuesta = new ajaxUsuarios();
        $respuesta -> MostrarUsuarios();

    }else{

        if($_POST["accion"] == "registrar"){
            
            $insertar = new ajaxUsuarios();
            $insertar->nombre_usu = $_POST["nombre_usu"];
            $insertar->apellido_usu = $_POST["apellido_usu"];
            $insertar->usuario = $_POST["usuario"];
            $insertar->clave = $_POST["clave"];
            $insertar->estatus = $_POST["estatus"];
            $insertar->perfil = $_POST["perfil"];
            $insertar->registrarUsuarios();

        } 
        if($_POST["accion"] == "eliminar"){

            $eliminar = new ajaxUsuarios();
            $eliminar->id_usu = $_POST["id_usu"];
            $eliminar->eliminarUsuarios();
        }
        if($_POST["accion"] == "actualizar"){

            $actualizar = new ajaxUsuarios();
            $actualizar->id_usu = $_POST["id_usu"];
            $actualizar->nombre_usu = $_POST["nombre_usu"];
            $actualizar->apellido_usu = $_POST["apellido_usu"];
            $actualizar->usuario = $_POST["usuario"];
            $actualizar->clave = $_POST["clave"];
            $actualizar->estatus = $_POST["estatus"];
            $actualizar->perfil = $_POST["perfil"];
            $actualizar->actualizarUsuarios();

        }
    }


?>