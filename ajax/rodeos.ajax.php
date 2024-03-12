<?php

    include_once "../controladores/rodeos.controlador.php";
    include_once "../modelos/rodeos.modelo.php";

    class ajaxRodeos{

        public $id_rodeo;
        public $nombre_rodeo;

        public function MostrarRodeos(){

            $respuesta = ControladorRodeos::ctrMostrarRodeos();

            echo json_encode ($respuesta);
        }

         public function registrarRodeos(){

            $respuesta = ControladorRodeos::ctrRegistrarRodeos($this->nombre_rodeo);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);

        }
        public function eliminarRodeos(){

            $respuesta = ControladorRodeos::ctrEliminarRodeos($this->id_rodeo);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
        }
        public function actualizarRodeos(){
             
            $respuesta = ControladorRodeos::ctrActualizarRodeos($this->id_rodeo,$this->nombre_rodeo);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
        }
    }

//SE EJECUTA LA ACCION GUARDAR, EDITAR, ELIMINAR....
if(!isset($_POST["accion"])){
    //AQUI SE CARGAR LA PAGINA..
    $respuesta = new ajaxRodeos();
    $respuesta -> MostrarRodeos();

}else{

    if($_POST["accion"] == "registrar"){

        $insertar = new ajaxRodeos();
        $insertar->nombre_rodeo = $_POST["nombre_rodeo"];
        $insertar->registrarRodeos();
    }
    if($_POST["accion"] == "eliminar"){

       $eliminar = new ajaxRodeos();
       $eliminar->id_rodeo = $_POST["id_rodeo"];
       $eliminar->eliminarRodeos();        
    }
    if ($_POST["accion"] == "actualizar"){

        $actualizar = new ajaxRodeos();
        $actualizar->id_rodeo = $_POST["id_rodeo"];
        $actualizar->nombre_rodeo = $_POST["nombre_rodeo"];
        $actualizar->actualizarRodeos();

    }
        
}


?>