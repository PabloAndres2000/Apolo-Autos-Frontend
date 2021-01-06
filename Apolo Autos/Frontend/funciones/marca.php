<?php
require_once("./config/db.php");
?>
<?php
$marcas = $conexion->query(" SELECT * FROM marcas");
while ($data = $marcas->fetch_assoc()) {
?>
    <option value="<?php echo $data["idmarca"];  ?>"><?php echo $data["nombre"]; ?></option>
<?php
}
?>