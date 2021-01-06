<?php

require_once(__DIR__ . "/../Models/Cliente.php");
require_once(__DIR__ . "/../App/Response.php");
/*
    El Controllers recibe lo que se envio en los Routes.
    Controllers es el tercer orden.

*/

class ClienteController extends Cliente
{
    public function ControllerInsertar($nombre, $correo, $direccion)
    {
        /*
            Estos datos los manda a Models
        */
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->direccion = $direccion;
        $this->estado = 1;

        $response = $this->Insertar(); //Recibe los datos del models
        return $response->makeResponse(); //Retorna los datos mediante makeResponse que es para darle formato de response a todos los datos
    }

    public function ControllerListar()
    {
        $response = $this->Listar(); // Muesta los datos del la public function listar de usuarios
        return $response->makeResponse();
    }

    public function ControllerActualizar($nombre, $correo, $direccion, $idCliente)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->direccion = $direccion;
        $this->estado = 1;
        $this->idCliente = $idCliente;

        $response = $this->Actualizar(); //Recibe los datos del models
        return $response->makeResponse(); //Retorna los datos mediante makeResponse que es para darle formato de response a todos los datos
    }

    //Activar Estado
    public function ControllerActivar($idCliente)
    {
        $this->idCliente = $idCliente;
        $this->estado = 1;

        $response = $this->CambiarEstado();

        return $response->makeResponse();
    }
    //Desactivar Estado
    public function ControllerDesactivar($idCliente)
    {
        $this->idCliente = $idCliente;
        $this->estado = 0;

        $response = $this->CambiarEstado();

        return $response->makeResponse();
    }
}
