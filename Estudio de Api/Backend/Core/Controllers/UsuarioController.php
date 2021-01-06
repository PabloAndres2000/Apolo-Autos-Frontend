<?php 
require_once(__DIR__."/../Models/Usuario.php");
require_once(__DIR__."/../App/Response.php");
/*
    El Controllers recibe lo que se envio en los Routes.
    Controllers es el tercer orden.

*/
class UsuarioController extends Usuario
{
    public function ControllerInsertar($nombre, $correo, $contraseña)
    {   /*
            Estos datos los manda a Models
        */
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->estado = 1;


        $response = $this->Insertar();//Recibe los datos del models

        return $response->makeResponse();//Retorna los datos mediante makeResponse que es para darle formato de response a todos los datos
    }

    public function ControllerListar()
    {
        $response = $this->Listar(); // Muesta los datos del la public function listar de usuarios
        return $response->makeResponse(); 
    }

    public function ControllerActualizar($nombre,$correo,$contraseña,$idUsuario)
    {
        /*
            Estos datos los manda a Models
        */
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->estado = 1;
        $this->idUsuario = $idUsuario;

        $response = $this->Actualizar();//Recibe los datos del models

        return $response->makeResponse();//Retorna los datos mediante makeResponse que es para darle formato de response a todos los datos
    }
    //Activar Estado
    public function ControllerActivar($idUsuario)
    {
        $this->idUsuario = $idUsuario;
        $this->estado = 1;

        $response = $this->CambiarEstado();

        return $response->makeResponse();
    }
    //Desactivar Estado
    public function ControllerDesactivar($idUsuario)
    {
        $this->idUsuario = $idUsuario;
        $this->estado = 0;

        $response = $this->CambiarEstado();

        return $response->makeResponse();
    }
}


?>