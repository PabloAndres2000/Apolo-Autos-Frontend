<?php 
session_start();
require_once("../model/CategoriasModel.php");
$Controlador= new CategoriasController();
$Controlador->init();
class CategoriasController{
    public function init(){
        $opcion=$_POST['opcion'];
        switch($opcion){
            case 'insertar':
                $this->ControllerInsertar();
            break;


        }
    }
    public function ControllerInsertar(){
        $model=new Categorias();
        $nombre=$_POST['nombre'];
        $model->nombre=$nombre;
        if($model->insertar()){
            $_SESSION["MSJ"]="La Categoria Se Inserto Correctamente";
            header("location:/CrearCategoria.php");

            

        }else{
            $_SESSION["MSJ"]="Ocurrio Un Error";
            header("location:/CrearCategoria.php");
        }
        



    }
}
