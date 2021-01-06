<?php 
require_once(__DIR__ . "/../App/Database.php");
require_once(__DIR__ . "/../App/Response.php");
$db = new Database();


class Cliente
{
    //atributos
    public $idCliente;
    public $nombre;
    public $correo;
    public $direccion;
    public $estado;

    public function Insertar()
    {
        //siempre es global $db
        global $db;
        $query = $db->con->prepare("INSERT INTO clientes(nombre,correo,direccion,estado) values(?,?,?,?)");
        $query->bind_param("sssi", $this->nombre, $this->correo, $this->direccion, $this->estado);
    
    
        if($query->execute()){
            $response = new Response(200, "Cliente ingresado correctamente");

        }else{
            $response = new Response(500, "A Ocurrido Un Error");
        }
        
        return $response;
    }

    public function Listar()
    {
        //siempre es global $db
        global $db;
        //prepare es cuando se le envia datos. Como es una query no se usa el execute()

        $query = $db->con->query("SELECT * FROM clientes");
         //num_rows devuelve los numeros de  registros de la base de datos, cuando es mayor a 0 es por que existen datos

         if($query->num_rows > 0){
            $data = $query->fetch_all(MYSQLI_ASSOC); //El feth_all trae toda la informacion que rescate la query DE SELECT. El MYSQLI_ASSOC Es para darle formatos a los datos por separado asociativamente por eso assoc.
            $response = new Response(200,$data);
        }else{
            $response = new Response(404, "No se han encontrado registros de los clientes");
        }
        return $response;

    }
    public function Actualizar()
    {
        //siempre es global $db
        global $db;

        $query = $db->con->prepare("UPDATE clientes SET nombre = ?, correo = ?, direccion = ? WHERE idCliente = ?");
        $query->bind_param("sssii",$this->nombre,$this->correo,$this->direccion,$this->idCliente);
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

        $query = $db->con->prepare("UPDATE clientes SET estado = ? WHERE idCliente = ?");
        $query->bind_param("ii",$this->estado,$this->idCliente);

        if ($query->execute()) {
            $response = new Response(200, "Estado Cambiado Con Exito");
        } else {
            $response = new Response(500, "A ocurrido un error");
        }
        return $response;
    }

}
