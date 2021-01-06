<?php
session_start();
require_once("../config/db.php");




$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$insertar= "SELECT * FROM usuarios WHERE  correo='$correo' AND contraseña='$contraseña'";
$resultado= $conexion->query($insertar);
if(mysqli_num_rows($resultado) > 0) {
    $datoUsuario=mysqli_fetch_assoc($resultado);
    $_SESSION["LOGUEADO"] = true;
    $_SESSION["IDUSUARIO"] = $datoUsuario["idusuario"];
    header('Location:/despues-Registro.php');
    

}else{
    echo "Inicio No Exitoso";
}       
    

?>