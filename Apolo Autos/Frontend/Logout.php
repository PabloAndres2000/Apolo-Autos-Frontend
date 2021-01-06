<?php 
session_start();
$_SESSION['LOGEADO']=false;
session_unset();
session_destroy();
header("location:/");
?>