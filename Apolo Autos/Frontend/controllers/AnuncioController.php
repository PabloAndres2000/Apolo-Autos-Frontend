<?php
session_start();
require_once("../model/AnuncioModel.php");
$Controlador = new AnuncioController();
$Controlador->init();
class AnuncioController
{
    public function init()
    {
        $opcion = $_POST['opcion'];
        switch ($opcion) {
            case 'publicar':
                $this->ControllerInsertar();
                break;
        }
    }
    public function ControllerInsertar()
    {
        $model = new Anuncio();

        $imagenes = $_FILES['imagenes'];
        $año = $_POST['año'];
        $precio = $_POST['precio'];
        $cilindro = $_POST['cilindro'];
        $kilometraje = $_POST['kilometraje'];
        $modelo = $_POST['modelo'];
        $categoria = $_POST['categoria'];
        $tipoventa = $_POST['tipoventa'];
        $combustible = $_POST['combustible'];
        $estadodelauto = $_POST['estadodelauto'];
        $transmision = $_POST['transmision'];
        $region = $_POST['region'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $telefono = $_POST['telefono'];

        $model->imagenes = $imagenes;
        $model->año = $año;
        $model->precio = $precio;
        $model->cilindrada = $cilindro;
        $model->kilometraje = $kilometraje;
        $model->modelo = $modelo;
        $model->tipoventa = $tipoventa;
        $model->estadodelauto = $estadodelauto;
        $model->region = $region;
        $model->categoria = $categoria;
        $model->combustible = $combustible;
        $model->transmision = $transmision;
        $model->titulo = $titulo;
        $model->descripcion = $descripcion;
        $model->telefono = $telefono;
        if ($model->insertar()) {
            $_SESSION["MSJ"] = "El Auto Se Publico Correctamente";
            header("location:/MisPublicaciones.php");
           
        } else {
            $_SESSION["MSJ"] = "Ocurrio Un Error";
            header("location:/Suv.php");
        }
    }
}
