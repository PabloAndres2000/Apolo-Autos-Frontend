<?php
require_once("Config.php");


class TipoVenta
{
    public $idtipo_vendedor;
    public $nombre;

    public  function insertar()
    {
        $db = new Config();

        $query = $db->Con->prepare("INSERT INTO tipo_vendedores(nombre) values(?)");
        $query->bind_param("s", $this->nombre);


        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public static  function listar()
    {
        $db = new Config();

        $query = $db->Con->query("SELECT * FROM tipo_vendedores ");
        $data=$query->fetch_all(MYSQLI_ASSOC);


        return $data;
    }
}
