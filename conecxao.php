<?php
class Conecxao {
    //Atributos
    private $host="localhost";
    private $user='root';
    private $pass='';
    private $db='taberna';
    private $conn;
    //Método
    public function conectar(){
        $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
        if ($this->conn->connect_error){
            die('Error '.$this->conn->connect_errno.$this->conn->connect_error);
        }
    }
    public function consultar($sql){
        $this->conectar();
        return $this->conn->query($sql);
    }
    //Métodos Especiais
    public function __construct()
    {
        $this->conectar();
    }
    public function getConection(){
        return $this->conectar();
    }
}