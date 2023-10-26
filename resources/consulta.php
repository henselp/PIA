<?php

class Consultas {
    public $Connect;

    public function __construct($Connexion) {
        $this->Connect = $Connexion;
    }

    public function Register($Nombre, $Apellido,$Email,$Grado, $Pass) {
        $Nombre = $this->Connect->real_escape_string($Nombre);
        $Apellido = $this->Connect->real_escape_string($Apellido);
        $Email = $this->Connect->real_escape_string($Email);
        $Grado = $this->Connect->real_escape_string($Grado);
        $Pass = $this->Connect->real_escape_string($Pass);


        $query = "INSERT INTO estudiantes(nombre,apellido,email,grado,pass) VALUES('$Nombre','$Apellido','$Email','$Grado','$Pass')";
        return $this->Connect->query($query);
    }

    public function obtenerPersonas() {
        $query = "SELECT * FROM personas";
        $result = $this->Connect->query($query);

        $usuarios = array();
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
        return $usuarios;
    }
}
?>