<?php

$server="localhost";
$user="root";
$pass= "";
$db= "postres_bd";


$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno){
    die("Conexion Fallida" . $conexion->connect_errno);
} 
?>
