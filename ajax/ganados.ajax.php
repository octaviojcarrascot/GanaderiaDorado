<?php

    include_once "../controladores/ganados.controlador.php";
    include_once "../modelos/Ganados.modelo.php";

    class ajaxGanados{

        public $id_ganado;
        public $caravana;
        public $numero;
        public $sexo;
        public $categoria;
        public $peso;
        public $id_raza;
        public $id_propietario;
        public $id_rodeo;
        public $fecha_nac;
       

        public function MostrarGanados(){

            $respuesta = ControladorGanados::ctrMostrarGanados();

            echo json_encode ($respuesta);

        }
        public function registrarGanados(){

            $respuesta = ControladorGanados::ctrRegistrarGanados($this->caravana,$this->numero,$this->sexo,$this->categoria,$this->peso,$this->id_raza,$this->id_propietario,$this->id_rodeo,$this->fecha_nac);
            
            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
        }
        public function eliminarGanados(){

            $respuesta = ControladorGanados::ctrEliminarGanados($this->id_ganado);

            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

        }
        public function actualizarGanados(){

            $respuesta = ControladorGanados::ctrActualizarGanados($this->id_ganado,$this->caravana,$this->numero,$this->sexo,$this->categoria,$this->estatus,$this->peso,$this->id_raza,$this->id_propietario,$this->id_rodeo,$this->edad,$this->fecha_nac);

            echo json_encode($repuesta, JSON_UNESCAPED_UNICODE);

        }
    }
     //SE EJECUTA LA ACCION GUARDAR, EDITAR, ELIMINAR...

     if(!isset($_POST["accion"])){

        $respuesta = new ajaxGanados();
        $respuesta -> MostrarGanados();
        

     }else{

        if($_POST["accion"] == "registrar"){

            $insertar = new ajaxGanados();
            $insertar->caravana = $_POST["caravana"];
            $insertar->numero = $_POST["numero"];
            $insertar->sexo = $_POST["sexo"];
            $insertar->categoria = $_POST["categoria"];
            //$insertar->estatus = $_POST["estatus"];
            $insertar->peso = $_POST["peso"];
            $insertar->id_raza = $_POST["id_raza"];
            $insertar->id_propietario = $_POST["id_propietario"];
            $insertar->id_rodeo = $_POST["id_rodeo"];
           // $insertar->edad = $_POST["edad"];
            $insertar->fecha_nac = $_POST["fecha_nac"];
            $insertar->registrarGanados();
        }
        if($_POST["accion"] == "eliminar"){

            $eliminar = new ajaxGanados();
            $eliminar->id_ganado = $_POST["id_ganado"];
            $eliminar->eliminarGanados();

        }
        if($_POST["accion"] == "actualizar"){

            $actualizar = new ajaxGanados();
            $actualizar->caravana = $_POST["caravana"];
            $actualizar->numero = $_POST["numero"];
            $actualizar->sexo = $_POST["sexo"];
            $actualizar->categoria = $_POST["categoria"];
            //$actualizar->estatus = $_POST["estatus"];
            $actualizar->peso = $_POST["peso"];
            $actualizar->id_raza = $_POST["id_raza"];
            $actualizar->id_propietrio = $_POST["id_propietario"];
            $actualizar->id_rodeo = $_POST["id_rodeo"];
            //$actualizar->edad = $_POST["edad"];
            //$actualizar->fecha_nac = $_POST["fecha_nac"];
            $actualizar->registrarGanados();

        }
     }
     
    

?>
