<?php
require_once(__DIR__ . "/../App/Database.php");
require_once(__DIR__ . "/../App/Response.php");

$db = new Database();


class Venta
{
    //atributos
    public $idVenta;
    public $fecha;
    public $monto;
    public $idUsuario;
    public $estado;
    public $idCliente;




    public function Insertar()
    {
        //Siempre es global $db
        global $db;
        $query = $db->con->prepare("INSERT INTO ventas(fecha,monto,idUsuario,estado,idCliente) values(?,?,?,?,?)");
        $query->bind_param("siiii", $this->fecha, $this->monto, $this->idUsuario,$this->estado,$this->idCliente);

        if ($query->execute()) {
            $response = new Response(200, "Venta ingresada correctamente");
        } else {
            $response = new Response(500, "A Ocurrido un error");
        }

        return $response;
    }
    public function Listar()
    {
        //Siempre es global
        global $db;
        //prepare es cuando se le envia datos. Como es una query no se usa el execute()
        $query = $db->con->query("SELECT * FROM ventas");
        //num_rows devuelve los numeros de  registros de la base de datos, cuando es mayor a 0 es por que existen datos
        if ($query->num_rows > 0) {
            $data = $query->fetch_all(MYSQLI_ASSOC); //El feth_all trae toda la informacion que rescate la query DE SELECT. El MYSQLI_ASSOC Es para darle formatos a los datos por separado asociativamente por eso assoc.
            $response = new Response(200, $data);
        } else {
            $response = new Response(404, "No se a encontrado registros de ventas");
        }
        return $response;
    }
    public function Actualizar()
    {
        //Siempre es global
        global $db;
        //prepare es cuando se le envia datos. Como es una query no se usa el execute()
        $query = $db->con->prepare("UPDATE ventas SET fecha = ?, monto = ?, idUsuario = ?, idCliente = ? WHERE idVenta = ? ");
        $query->bind_param("siiii", $this->fecha, $this->monto, $this->idUsuario,$this->idCliente, $this->idVenta);
        if ($query->execute()) {
            $response = new Response(200, "Su actualizacion a sido exitosa");
        } else {
            $response = new Response(500, "A ocurrido un error");
        }
        return $response;
    }

    public function CambiarEstado()
    {
        // Siemrpe es global $db
        global $db;

        $query = $db->con->prepare("UPDATE ventas SET estado = ? WHERE idVenta = ?");
        $query->bind_param("ii",$this->estado,$this->idVenta);

        if ($query->execute()) {
            $response = new Response(200, "Estado Cambiado Con Exito");
        } else {
            $response = new Response(500, "A ocurrido un error");
        }
        return $response;
    }
}
