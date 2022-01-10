<?php
class Conexion{

    private $host="localhost";
    private $db="phppoo";
    private $usr="root";
    private $pwd="root";
    private $conecta;
    
    public function __construct(){
        $cadenadeconexion="mysql:host=".$this->host.";dbname=".$this->db."; charset=utf8";
        try{
            $this->conecta=new PDO($cadenadeconexion,$this->usr,$this->pwd);
            $this->conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            $this->conecta="Error de conexion";
            echo "Error: ".$e->getMessage();
        }
    }

    public function AbrirConexion(){
        return $this->conecta;
    }
}
?>