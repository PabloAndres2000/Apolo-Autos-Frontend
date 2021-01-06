<?php 
session_start();
require_once("../model/EstadoAutoModel.php");
$Controlador= new EstadoAutoController();
$Controlador->init();
class EstadoAutoController{
    public function init(){
        $opcion=$_POST['opcion'];
        switch($opcion){
            case 'insertar':
                $this->ControllerInsertar();
            break;


        }
    }
    public function ControllerInsertar(){
        $model=new EstadoAuto();
        $nombre=$_POST['nombre'];
        $model->nombre=$nombre;
        if($model->insertar()){
            $_SESSION["MSJ"]="La Categoria Se Inserto Correctamente";
            header("location:/CrearEstadoAuto.php");

            

        }else{
            $_SESSION["MSJ"]="Ocurrio Un Error";
            header("location:/CrearEstadoAuto.php");
        }
        



    }
}
