<?php
require_once("Config.php");


class Usuarios
{
    public $idusuario;
    public $nombre;
    public $correo;
    public $contraseña;


    public  function insertar()
    {
        $db = new Config();

        $query = $db->Con->prepare("INSERT INTO usuarios(correo,contraseña,nombre) values(?,?,?)");
        $query->bind_param("sss", $this->correo, $this->contraseña, $this->nombre);


        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public   function Login()
    {
        $db = new Config();

        $query = $db->Con->prepare("SELECT idusuario FROM usuarios WHERE correo=? AND contraseña=? ");
        $query->bind_param("ss", $this->correo, $this->contraseña);
        $query->bind_result($idusuario);
        $query->execute();
        $query->store_result();


        $UsuariosEcontrado = $query->num_rows();
        if ($UsuariosEcontrado == 1) {
            $query->fetch();
            $_SESSION['LOGEADO'] = true;
            $_SESSION['IDUSUARIO'] = $idusuario;
            return true;
        } else {
            return false;
        }
    }
    public static  function listar()
    {
        $db = new Config();

        $query = $db->Con->query("SELECT * FROM usuarios ");
        $data = $query->fetch_all(MYSQLI_ASSOC);


        return $data;
    }

    public  function modificar()
    {
        $db = new Config();
        $query = $db->Con->prepare("UPDATE usuarios SET nombre=?,correo=?,contraseña=? WHERE idusuario=? ");
        $query->bind_param("sssi", $this->nombre, $this->correo, $this->contraseña, $this->idusuario);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
}
