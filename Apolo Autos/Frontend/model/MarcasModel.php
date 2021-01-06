<?php
require_once("Config.php");


class Marcas
{
    public $idmarca;
    public $nombre;

    public  function insertar()
    {
        $db = new Config();

        $query = $db->Con->prepare("INSERT INTO marcas(nombre) values(?)");
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

        $query = $db->Con->query("SELECT * FROM marcas ");
        $data=$query->fetch_all(MYSQLI_ASSOC);


        return $data;
    }
}
