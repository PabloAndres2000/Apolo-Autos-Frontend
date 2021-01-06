<?php
require_once(__DIR__ . "/../Controllers/ClienteController.php");

use \Slim\App;
use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;
/*
    El Routes es el segundo orden
*/

class Clientes
{
    //atributo
    private $app;

    public function __construct(App $app)
    {
        $this->app = $app;
    }

    public function Insertar()
    {
        //Get es para obtener datos
        //Post Es para ingresar datos
        //Put Es para actualizar datos
        //Delete Es para eliminar Datos Se utiliza en base de datos no relacionales

        $this->app->post("/Insertar", function (Request $request, Response $response, array $args) {
            $nombre = $request->getParam("nombre");
            $correo = $request->getParam("correo");
            $direccion = $request->getParam("direccion");
            $estado = $request->getParam("estado");
            $cliente = new ClienteController();
            $data = $cliente->ControllerInsertar($nombre, $correo, $direccion,$estado);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }

    public function Listar()
    {

        //Los listar no reciben parametros, entonces solamente se muestran
        $this->app->get("/Listar", function (Request $request, Response $response, array $args) {
            $cliente = new ClienteController();
            $data = $cliente->ControllerListar();
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }

    public function Actualizar()
    {
        $this->app->put("/Actualizar/{idCliente}",function(Request $request, Response $response, array $args){
            $nombre = $request-> getParam("nombre");
            $correo = $request-> getParam("correo");
            $direccion = $request-> getParam("contraseña");
            $idCliente = $request-> getAttribute("idCliente");
            $cliente = new ClienteController();
            $data = $cliente->ControllerActualizar($nombre, $correo, $direccion,$idCliente);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }
    public function Activar()
    {
        $this->app->put("/Activar/{idCliente}", function (Request $request, Response $response, array $args) {
            $idCliente = $request->getAttribute("idCliente");
            $cliente = new ClienteController();
            $data = $cliente->ControllerActivar($idCliente);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }

    public function Desactivar()
    {
        $this->app->put("/Desactivar/{idCliente}", function (Request $request, Response $response, array $args) {
            $idCliente = $request->getAttribute("idCliente");
            $cliente = new ClienteController();
            $data = $cliente->ControllerDesactivar($idCliente);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }
}
