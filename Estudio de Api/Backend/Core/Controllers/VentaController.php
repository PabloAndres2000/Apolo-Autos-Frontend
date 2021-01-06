<?php 
require_once(__DIR__."/../Models/Venta.php");
require_once(__DIR__."/../App/Response.php");

class VentaController extends Venta
{
    // dentro de la funcion ControllerInsertar recibe parametros por que estamos llamando a la extencion del modelo de ventas
    public function ControllerInsertar($fecha,$monto,$idUsuario,$idCliente){
        $this->fecha = $fecha;
        $this->monto = $monto;
        $this->idUsuario = $idUsuario;
        $this->estado = 1;
        $this->idCliente = $idCliente;

        $response = $this->Insertar();

        return $response->makeResponse();
    }


    public function ControllerListar()
    {
        $response = $this->Listar();

        return $response->makeResponse();
    }

    public function ControllerActualizar($fecha,$monto,$idUsuario,$idVenta,$idCliente)
    {
        $this->fecha = $fecha;
        $this->monto = $monto;
        $this->idUsuario = $idUsuario;
        $this->idVenta = $idVenta;
        $this->idCliente = $idCliente;
        

        $response = $this->Actualizar();

        return $response->makeResponse();
    }

    public function ControllerActivar($idVenta)
    {
        $this->idVenta = $idVenta;
        $this->estado = 1;

        $response = $this->CambiarEstado();

        return $response->makeResponse();
    }
    public function ControllerDesactivar($idVenta)
    {
        $this->idVenta = $idVenta;
        $this->estado = 0;

        $response = $this->CambiarEstado();

        return $response->makeResponse();
    }
}

?>