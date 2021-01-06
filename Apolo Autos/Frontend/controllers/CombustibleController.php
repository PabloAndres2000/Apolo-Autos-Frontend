<?php 
session_start();
require_once("../model/EstadoAutoModel.php");
$Controlador= new CombustibleController();
$Controlador->init();
class CombustibleController{
    public function init(){
        $opcion=$_POST['opcion'];
        switch($opcion){
            case 'insertar':
                $this->ControllerInsertar();
            break;


        }
    }
    public function ControllerInsertar(){
        $model=new Combustible();
        $nombre=$_POST['nombre'];
        $model->nombre=$nombre;
        if($model->insertar()){
            $_SESSION["MSJ"]="La Categoria Se Inserto Correctamente";
            header("location:/CrearCombustible.php");

            

        }else{
            $_SESSION["MSJ"]="Ocurrio Un Error";
            header("location:/CrearCombustible.php");
        }
        



    }
}
