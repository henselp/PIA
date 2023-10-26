<?php
include './resources/consulta.php';
include './resources/conexion.php'; 
$Conexion = new conexion();
$Consulta = new Consultas($Conexion->conexion);

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Nombre=$_POST['nombre'];
    $Apellido=$_POST['apellido'];
    $Email=$_POST['email'];
    $Grado=$_POST['grado'];
    $Pass=$_POST['pass'];
    $Consulta->Register($Nombre,$Apellido,$Email,$Grado,$Pass);
    header('location: ./index.php');
    exit;
}

?>