<?php 
session_start();
require_once("../model/ModeloModel.php");
$Controlador= new ModeloController();
$Controlador->init();
class ModeloController{
    public function init(){
        $opcion=$_POST['opcion'];
        switch($opcion){
            case 'insertar':
                $this->ControllerInsertar();
            break;


        }
    }
    public function ControllerInsertar(){
        $model=new Modelo();
        $nombre=$_POST['nombre'];
        $model->nombre=$nombre;
        if($model->insertar()){
            $_SESSION["MSJ"]="La Marca Se Inserto Correctamente";
            header("location:/CrearModelo.php");

            

        }else{
            $_SESSION["MSJ"]="Ocurrio Un Error";
            header("location:/CrearModelo.php");
        }
        



    }
}
