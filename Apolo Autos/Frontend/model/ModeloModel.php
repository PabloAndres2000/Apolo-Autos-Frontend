<?php
require_once("Config.php");


class Modelo
{
    public $idmodelo;
    public $nombre;

    public  function insertar()
    {
        $db = new Config();

        $query = $db->Con->prepare("INSERT INTO modelos(nombre) values(?)");
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

        $query = $db->Con->query("SELECT * FROM modelos ");
        $data=$query->fetch_all(MYSQLI_ASSOC);


        return $data;
    }
}
