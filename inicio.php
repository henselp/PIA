<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    include './resources/consulta.php';
    include './resources/conexion.php';

    $Conexion = new conexion();
    $Consulta = new Consultas($Conexion->conexion);

    $Email=$_POST['correo'];
    $comunidad = $_POST['comunidad'];
    $pass = $_POST['pass'];



    $Consulta->inicioDeSesion($Email,$pass,$comunidad);
    exit;
}
?>