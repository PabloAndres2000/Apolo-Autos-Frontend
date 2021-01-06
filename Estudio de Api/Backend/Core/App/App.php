<?php
// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;
/*
    El App es el comienzo de todo.
    Aqui se crean las rutas

*/
use Slim\App;

require __DIR__ . '/../../vendor/autoload.php';
require_once(__DIR__."/../Routes/Usuarios.php");
require_once(__DIR__."/../Routes/Ventas.php");
require_once(__DIR__."/../Routes/Clientes.php");
$app = new App();

$app->group('/api', function () use ($app) {
    $app->group('/Usuarios', function () use ($app) {//usuarios es un recurso
        $usuarios = new Usuarios($app);
        $usuarios->Insertar(); //Insertar Se va a Routes de Usuarios.php
        $usuarios->Listar(); //Listar Se va a Routes de Usuarios.php
        $usuarios->Actualizar(); //Actualizar Se va a Routes de Usuarios.php
        $usuarios->Activar(); //Activar Estado, Se va a Routes de Usuarios.php
        $usuarios->Desactivar(); //Desactivar Estado, Se va a Routes de Usuarios.php
    });
    $app->group('/Ventas', function () use ($app) {//ventas es un recurso
        $venta = new Ventas($app);
        $venta->Insertar();//Insertar Se va a Routes de Ventas.php
        $venta->Listar();//Listar Se va a Routes de Ventas.php
        $venta->Actualizar(); //Actualizar Se va a Routes de Ventas.php
        $venta->Activar(); //Activar Estado, Se va a Routes de Ventas.php
        $venta->Desactivar(); //Desactivar Estado, Se va a Routes de Ventas.php

    });
    $app->group('/Clientes',function() use ($app){ //Clientes es un recurso
        $cliente = new Clientes($app);
        $cliente->Insertar();//Insertar Se va a Routes de Clientes.php
        $cliente->Listar();//Listar Se va a Routes de Clientes.php
        $cliente->Actualizar();//Actualizar Se va a Routes de Clientes.php
        $cliente->Activar(); //Activar Estado, Se va a Routes de Clientes.php
        $cliente->Desactivar(); //Desactivar Estado, Se va a Routes de Clientes.php
    });
});


$app->run();
