<?php 
require_once(__DIR__."/../App/Database.php");
require_once(__DIR__."/../App/Response.php");

$db = new Database();
/*
    El model recibe lo que le envio el controllers y se hace la conexion a la base de datos y luegos los datos ingresados 
    en el model se envia al controllador de nuevo
*/
class Usuario{

    //atributos
    public $idUsuario;
    public $nombre;
    public $correo;
    public $contraseña;
    public $estado;

    public function Insertar(){
        global $db;

        $query = $db->con->prepare("INSERT INTO usuarios(nombre,correo,contraseña,estado) values(?,?,?,?)");
        $query->bind_param("sssi",$this->nombre,$this->correo,$this->contraseña,$this->estado);

        if($query->execute()){
            $response = new Response(200,"Usuario ingresado Con Exito");

        }else{
            $response = new Response(500,"A ocurrido Un Error");
        }

        return $response;

    }
    public function Listar()
    {   global $db;
        //prepare es cuando se le envia datos. Como es una query no se usa el execute()
        $query = $db->con->query("SELECT * FROM usuarios");
        //num_rows devuelve los numeros de  registros de la base de datos, cuando es mayor a 0 es por que existen datos
        if($query->num_rows > 0){
            $data = $query->fetch_all(MYSQLI_ASSOC); //El feth_all trae toda la informacion que rescate la query DE SELECT. El MYSQLI_ASSOC Es para darle formatos a los datos por separado asociativamente por eso assoc.
            $response = new Response(200,$data);
        }else{
            $response = new Response(404, "No se han encontrado registros de usuarios");
        }
        return $response;

    }
    public function Actualizar()
    {
        global $db;
        $query = $db->con->prepare("UPDATE usuarios SET nombre = ?, correo = ?, contraseña = ? WHERE idUsuario = ?");
        $query->bind_param("sssi",$this->nombre,$this->correo,$this->contraseña,$this->idUsuario);
        if($query->execute()){
            $response = new Response(200,"Su actualizacion a sido exitosa");
        }else{
            $response = new Response(500,"A ocurrido un error");
        }
        return $response;
    }

    public function CambiarEstado()
    {
        // Siemrpe es global $db
        global $db;

        $query = $db->con->prepare("UPDATE usuarios SET estado = ? WHERE idUsuario = ?");
        $query->bind_param("ii",$this->estado,$this->idUsuario);

        if ($query->execute()) {
            $response = new Response(200, "Estado Cambiado Con Exito");
        } else {
            $response = new Response(500, "A ocurrido un error");
        }
        return $response;
    }
    






}

?>