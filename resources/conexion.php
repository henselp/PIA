<?php
class conexion{
    private $host= "localhost";
    private $user= "root";
    private $password= "";
    private $dataBase= "schoolfeedingprogram";
    
    public $conexion;

    public function __construct()
    {
        $this->conexion = new mysqli($this->host,$this->user, $this->password, $this->dataBase);
        if ($this->conexion->connect_error) {
            echo "Error 400";
        }
    }

    public function CloseConnect(){
        return $this->conexion->close();
    }
}


?>