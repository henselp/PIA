<?php
include './resources/consulta.php';
include './resources/conexion.php'; 
$Conexion = new conexion();
$Consulta = new Consultas($Conexion->conexion);

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Conexion->();
    header('location: ./index.php');
    exit;
}
?>