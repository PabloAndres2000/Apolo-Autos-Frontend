<?php 
$baseDeDatos="ventadeautos";
$servidor="localhost";
$usuario="root";
$contraseña="";
//crear conexion
setlocale(LC_ALL,'es_CL');
$conexion=new mysqli($servidor,$usuario,$contraseña,$baseDeDatos);
if($conexion->connect_error){
    exit();


} else{
    return $conexion;
}
?>