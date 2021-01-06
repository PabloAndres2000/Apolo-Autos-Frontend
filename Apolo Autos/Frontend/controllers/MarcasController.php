<?php 
session_start();
require_once("../model/MarcasModel.php");
$Controlador= new MarcasController();
$Controlador->init();
class MarcasController{
    public function init(){
        $opcion=$_POST['opcion'];
        switch($opcion){
            case 'insertar':
                $this->ControllerInsertar();
            break;


        }
    }
    public function ControllerInsertar(){
        $model=new Marcas();
        $nombre=$_POST['nombre'];
        $model->nombre=$nombre;
        if($model->insertar()){
            $_SESSION["MSJ"]="La Marca Se Inserto Correctamente";
            header("location:/CrearMarca.php");

            

        }else{
            $_SESSION["MSJ"]="Ocurrio Un Error";
            header("location:/CrearMarca.php");
        }
        



    }
}
