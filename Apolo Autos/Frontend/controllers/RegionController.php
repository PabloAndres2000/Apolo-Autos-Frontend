<?php 
session_start();
require_once("../model/RegionModel.php");
$Controlador= new RegionController();
$Controlador->init();
class RegionController{
    public function init(){
        $opcion=$_POST['opcion'];
        switch($opcion){
            case 'insertar':
                $this->ControllerInsertar();
            break;


        }
    }
    public function ControllerInsertar(){
        $model=new Region();
        $nombre=$_POST['nombre'];
        $model->nombre=$nombre;
        if($model->insertar()){
            $_SESSION["MSJ"]="La Marca Se Inserto Correctamente";
            header("location:/CrearRegion.php");

            

        }else{
            $_SESSION["MSJ"]="Ocurrio Un Error";
            header("location:/CrearRegion.php");
        }
        



    }
}
