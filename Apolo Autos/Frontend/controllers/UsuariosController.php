<?php
session_start();
require_once("../model/UsuariosModel.php");
$Controlador = new UsuariosController();
$Controlador->init();
class UsuariosController
{
    public function init()
    {
        $opcion = $_POST['opcion'];
        switch ($opcion) {
            case 'insertar':
                $this->ControllerInsertar();
                break;
            case 'login':
                $this->ControllerLogin();
                break;
            case 'modificar':
                $this->ControllerModificar();
        }
    }
    public function ControllerInsertar()
    {
        $model = new Usuarios();
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        $model->correo = $correo;
        $model->contraseña = $contraseña;
        $model->nombre = $nombre;

        if ($model->insertar()) {
            $_SESSION["MSJ"] = "El Usuario Se Inserto Correctamente";
            header("location:/Login.php");
        } else {
            $_SESSION["MSJ"] = "Ocurrio Un Error";
            header("location:/Login.php");
        }
    }
    public function ControllerLogin()
    {
        $model = new Usuarios();

        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $model->correo = $correo;
        $model->contraseña = $contraseña;

        if ($model->Login()) {

            header("location:/HomeSesion.php");
        } else {
            $_SESSION["MSJ"] = "Usuario O Contraseña Incorrecta";
            header("location:/Login.php");
        }
    }
    public function ControllerModificar()
    {
        $model = new Usuarios();
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $model->correo = $correo;
        $model->contraseña = $contraseña;
        $model->nombre = $nombre;

        if ($model->modificar()) {

            header("location:/CuentaUsuario.php");
        } else {
            $_SESSION["MSJ"] = "Usuario O Contraseña Incorrecta";
            header("location:/CuentaUsuario.php");
        }
    }
}
