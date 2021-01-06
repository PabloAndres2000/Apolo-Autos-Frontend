<?php
require_once("Config.php");


class Anuncio
{
    public $imagenes;
    public $año;
    public $precio;
    public $cilindrada;
    public $kilometraje;
    public $modelo;
    public $tipoventa;
    public $estadodelauto;
    public $region;
    public $categoria;
    public $combustible;
    public $transmision;
    public $titulo;
    public $descripcion;
    public $telefono;



    public  function insertar()
    {
        $db = new Config();

        $query = $db->Con->prepare("INSERT INTO autos(año,precio,cilindros,kilometraje,idcombustible,idcategoria,idtransmision,idestado_auto,idmodelo) values(?,?,?,?,?,?,?,?,?)");
        $query->bind_param("iiiiiiiii", $this->año, $this->precio, $this->cilindrada, $this->kilometraje, $this->combustible, $this->categoria, $this->transmision, $this->estadodelauto, $this->modelo);



        if ($query->execute()) {
            $premium = 0;
            $idauto = $db->Con->insert_id;
            $idusuario = $_SESSION['IDUSUARIO'];
            $fecha = date('Y-m-d');

            $query2 = $db->Con->prepare("INSERT INTO publicaciones(premium,fecha_publicacion,idauto,idregion,idtipo_vendedor,idusuario,titulo,descripcion,telefono) values(?,?,?,?,?,?,?,?,?)");
            $query2->bind_param("isiiiisss", $premium, $fecha, $idauto, $this->region, $this->tipoventa, $idusuario,$this->titulo,$this->descripcion,$this->telefono);

            if ($query2->execute()) {
                $idpublicacion = $db->Con->insert_id;
                foreach ($this->imagenes['tmp_name'] as $imagen) {
                    $image = $imagen;
                    $img = base64_encode(file_get_contents(addslashes($image)));
                    $query3 = $db->Con->prepare("INSERT INTO imagenes(images,idpublicacion) values(?,?)");
                    $query3->bind_param("bi", $null, $idpublicacion);
                    $query3->send_long_data(0, $img);
                   

                    $query3->execute();
                }
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public static  function listar()
    {
        $db = new Config();

        $query = $db->Con->query("SELECT * FROM autos ORDER BY idauto DESC ");
        $data = $query->fetch_all(MYSQLI_ASSOC);


        return $data;

    }
    public static  function listarPremium()
    {
        $db = new Config();

        $query = $db->Con->query("SELECT * FROM publicaciones  WHERE premium=1 ORDER BY idpublicacion DESC ");
        $data = $query->fetch_all(MYSQLI_ASSOC);


        return $data;
    }
    public static  function ListarMisAutos()
    {
        $db = new Config();
        $idusuario= $_SESSION['IDUSUARIO'];
        $query = $db->Con->query("SELECT * FROM publicaciones  WHERE idusuario=$idusuario ORDER BY idpublicacion DESC ");
        $data = $query->fetch_all(MYSQLI_ASSOC);


        return $data;
    }
}
