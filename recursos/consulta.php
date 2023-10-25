<?php
include 'conexion.php';
class consulta{
    private $connect;
    
    public function __construct($conexion)
    {
        $this->connect=$conexion;
    }
public function insertar($id_estudiantes, $comunidad, $nombre, $apellido, $password){
        $comunidad= $this->connect->real_escape_string($comunidad);
        $nombre = $this->connect->real_escape_string($nombre);
        $apellido = $this->connect->real_escape_string($apellido);

        $query = "INSERT INTO estudiantes(id_estudiantes,comunidad,nombre,apellido,password) VALUES ($id_estudiantes,'$comunidad','$nombre','$apellido',$password)";
        return $this->connect->query($query);
    }
    public function obtenerPersonas(){
        $query = "SELECT * FROM estudiantes";
        $result = $this->connect->query($query);

$usuarios = array();
        while ($row = $result->fetch_assoc()){
            $usuarios[] = $row;
        }
        return $usuarios;
    }
}

$connet_db = new conexion();
$consulta = new consulta($connet_db->connect);
$consulta->insertar(1025654298,"Estudiante","Andres Felipe","Lopez Perez", 1025654298);
$consulta->insertar(1044987875,"Estudiante","Yolenny Andrea","Espinosa Tobarda",1044987875);
$consulta->insertar(1018245480,"Estudaiante","Juan Sebastian","Urrutia Conde",1018245480);
$consulta->insertar(1041230588,"Estudiante","Maria Jose","Martinez Salazar",1041230588);
$consulta->insertar(1018350792,"Estudiante","Camilo","Avendaño Sierra",1018350792);
$consulta->insertar(1023636294,"Estudiante","Derian Alexis","Gutierrez Acosta",1023636294);
$consulta->insertar(1013461841,"Estudiante","Maria Jose","Holguin Mira",1013461841);

$usuarios = $consulta->obtenerPersonas();
foreach ($usuarios as $usuario){
    echo "id_estudiante: " .$usuario['id_estudiante']."comunidad: " .$usuario['comunidad']. "nombre" .$usuario['nombre'] . ", apellidos: " .$usuario['apellidos'] . "password: " .$usuario['password']  ."<br>";
}
?>