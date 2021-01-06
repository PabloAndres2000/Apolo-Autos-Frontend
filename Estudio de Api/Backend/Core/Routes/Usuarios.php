<?php 
require_once(__DIR__."/../Controllers/UsuarioController.php");
use \Slim\App;
use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;
/*
    El Routes es el segundo orden
*/
class Usuarios
{
    private $app;

    public function __construct(App $app)
    {
        $this->app = $app;

    }
    public function Insertar()
    {
        $this->app->post("/Insertar",function(Request $request, Response $response, array $args){
            $nombre = $request-> getParam("nombre");
            $correo = $request-> getParam("correo");
            $contraseña = $request-> getParam("contraseña");
            $usuario = new UsuarioController();
            $data = $usuario->ControllerInsertar($nombre, $correo, $contraseña);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }
    public function Listar()
    {
        //Los listar no reciben parametros, entonces solamente se muestran
        $this->app->get("/Listar",function(Request $request, Response $response, array $args ){
            $usuario = new UsuarioController();
            $data = $usuario->ControllerListar();
            $response = $response->withJson($data["response"], $data["status"]);
            return $response; 
        });
    }
    public function Actualizar()
    {
        $this->app->put("/Actualizar/{idUsuario}",function(Request $request, Response $response, array $args){
            $nombre = $request-> getParam("nombre");
            $correo = $request-> getParam("correo");
            $contraseña = $request-> getParam("contraseña");
            $idUsuario = $request-> getAttribute("idUsuario");
            $usuario = new UsuarioController();
            $data = $usuario->ControllerActualizar($nombre, $correo, $contraseña,$idUsuario);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }

    public function Activar()
    {
        $this->app->put("/Activar/{idUsuario}", function (Request $request, Response $response, array $args) {
            $idUsuario = $request->getAttribute("idUsuario");
            $usuario = new UsuarioController();
            $data = $usuario->ControllerActivar($idUsuario);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }

    public function Desactivar()
    {
        $this->app->put("/Desactivar/{idUsuario}", function (Request $request, Response $response, array $args) {
            $idUsuario = $request->getAttribute("idUsuario");
            $usuario = new UsuarioController();
            $data = $usuario->ControllerDesactivar($idUsuario);
            $response = $response->withJson($data["response"], $data["status"]);
            return $response;
        });
    }
}
