<?php
require_once(__DIR__ . "/../Controllers/VentaController.php");

use \Slim\App;
use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;

class Ventas
{
    private $app;

    public function __construct(App $app)
    {

        $this->app = $app;
    }
    public function Insertar()
    {   //Get es para obtener datos
        //Post Es para ingresar datos
        //Put Es para actualizar datos
        //Delete Es para eliminar Datos Se utiliza en base de datos no relacionales
        $this->app->post("/Insertar", function (Request $request, Response $response, array $args) {
            $fecha = $request->getParam("fecha");
            $monto = $request->getParam("monto");
            $idUsuario = $request->getParam("idUsuario");
            $idCliente = $request->getParam("idCliente");
            $venta = new VentaController();
            $data = $venta->ControllerInsertar($fecha, $monto, $idUsuario, $idCliente);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }
    public function Listar()
    {
        //Get es para obtener datos
        //Post Es para ingresar datos
        //Put Es para actualizar datos
        //Delete Es para eliminar Datos Se utiliza en base de datos no relacionales
        $this->app->get("/Listar", function (Request $request, Response $response, array $args) {
            $venta = new VentaController();
            $data = $venta->ControllerListar();
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }
    public function Actualizar()
    {
        $this->app->put("/Actualizar/{idVenta}", function (Request $request, Response $response, array $args) {
            $fecha = $request->getParam("fecha");
            $monto = $request->getParam("monto");
            $idUsuario = $request->getParam("idUsuario");
            $idVenta = $request->getAttribute("idVenta");
            $idCliente = $request->getParam("idCliente");
            $venta = new VentaController();
            $data = $venta->ControllerActualizar($fecha, $monto, $idUsuario, $idVenta, $idCliente);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }

    public function Activar()
    {
        $this->app->put("/Activar/{idVenta}", function (Request $request, Response $response, array $args) {
            $idVenta = $request->getAttribute("idVenta");
            $venta = new VentaController();
            $data = $venta->ControllerActivar($idVenta);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }

    public function Desactivar()
    {
        $this->app->put("/Desactivar/{idVenta}", function (Request $request, Response $response, array $args) {
            $idVenta = $request->getAttribute("idVenta");
            $venta = new VentaController();
            $data = $venta->ControllerDesactivar($idVenta);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }
}
