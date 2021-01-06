<?php 
session_start();
require_once("../model/MarcasModel.php");
$Controlador= new TransmisionesController();
$Controlador->init();
class TransmisionesController{
    public function init(){
        $opcion=$_POST['opcion'];
        switch($opcion){
            case 'insertar':
                $this->ControllerInsertar();
            break;


        }
    }
    public function ControllerInsertar(){
        $model=new Transmision();
        $nombre=$_POST['nombre'];
        $model->nombre=$nombre;
        if($model->insertar()){
            $_SESSION["MSJ"]="La Marca Se Inserto Correctamente";
            header("location:/CrearTransmisiones.php");

            

        }else{
            $_SESSION["MSJ"]="Ocurrio Un Error";
            header("location:/CrearTransmisiones.php");
        }
        



    }
}
