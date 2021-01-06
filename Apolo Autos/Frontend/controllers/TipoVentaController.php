<?php 
session_start();
require_once("../model/TipoVentaModel.php");
$Controlador= new TipoVentaController();
$Controlador->init();
class TipoVentaController{
    public function init(){
        $opcion=$_POST['opcion'];
        switch($opcion){
            case 'insertar':
                $this->ControllerInsertar();
            break;


        }
    }
    public function ControllerInsertar(){
        $model=new TipoVenta();
        $nombre=$_POST['nombre'];
        $model->nombre=$nombre;
        if($model->insertar()){
            $_SESSION["MSJ"]="La Marca Se Inserto Correctamente";
            header("location:/CrearTipoVenta.php");

            

        }else{
            $_SESSION["MSJ"]="Ocurrio Un Error";
            header("location:/CrearTipoVenta.php");
        }
        



    }
}
