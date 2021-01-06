<?php
session_start();
require_once("../config/db.php");



$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$insertar= "INSERT INTO usuarios(nombre,correo,contraseña) values('$nombre','$correo','$contraseña')";
$resultado= $conexion->query($insertar);
if($resultado){
    echo "registro exitoso";
    
}
else{
    echo "Registro No Exitoso";
}       
    

?>