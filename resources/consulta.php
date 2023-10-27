<?php

class Consultas {
    public $Connect;

    public function __construct($Connexion) {
        $this->Connect = $Connexion;
    }


    public function Register($Nombre, $Apellido,$Email,$Grado, $Pass, $comunidad) {
        $Nombre = $this->Connect->real_escape_string($Nombre);
        $Apellido = $this->Connect->real_escape_string($Apellido);
        $Email = $this->Connect->real_escape_string($Email);
        $Grado = $this->Connect->real_escape_string($Grado);
        $Pass = $this->Connect->real_escape_string($Pass);
        $comunidad = $this->Connect->real_escape_string($comunidad);



        $query = "INSERT INTO usuarios(nombre,apellido,email,grado,pass,comunidad) VALUES('$Nombre','$Apellido','$Email','$Grado','$Pass', '$comunidad')";
        return $this->Connect->query($query);
    }

    // public function obtenerPersonas() {
    //     $query = "SELECT * FROM personas";
    //     $result = $this->Connect->query($query);

    //     $usuarios = array();
    //     while ($row = $result->fetch_assoc()) {
    //         $usuarios[] = $row;
    //     }
    //     return $usuarios;
    // }

    public function inicioDeSesion($correo,$pass,$comunidad){
        $correo = $this->Connect->real_escape_string($correo);
        $pass = $this->Connect->real_escape_string($pass);
        $comunidad = $this->Connect->real_escape_string($comunidad);

        $query = "SELECT * FROM usuarios WHERE email = '$correo'";
        $resultado = $this->Connect->query($query);

        if ($resultado->num_rows == 1){
            $filas = $resultado->fetch_assoc();
            $comunidaddb = $filas['comunidad'];
            $passdb = $filas['pass'];
            $correodb = $filas['email'];
            echo $comunidaddb . "<br>";
            echo $passdb . "<br>";
            echo $correodb . "<br>";
            echo $comunidad . "<br>";
            echo $pass . "<br>";
            echo $correo . "<br>";


            if ($correo == $correodb && $pass==$passdb && $comunidad == $comunidaddb) {
                session_start();
                $_SESSION['validado'] = true;
                header('Location: ../hola.php');
            }else{
                echo "Usuario o Contraseña incorrecta";
            }
        } else{
            echo "Usuarios o Contraseña ";
        }
    }
}
?>