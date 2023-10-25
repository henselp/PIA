<?php
class conexion{
    private $host="localhost";
    private $user="root";
    private $password="";
    private $database="school feeding program";

    public $connect;
    public function _construct()
    {
        $this->connect = new mysqli($this->host, $this->user, $this->password, $this->database);
        if($this->connect->connect_error){
            echo"Error 480";
        }
    }
    public function closeconect(){
        return $this->connect->close();
    }
}
?>