<?php
class Db{
    //Atributos
    private $host='localhost';
    private $user='root';
    private $db='taberna';
    private $pass='';
    private $mysqli;
    //Métodos
    public function conectar(){
        $this->mysqli = new mysqli($this->host,$this->user,$this->db,$this->pass);
        if ($this->mysqli->connect_error) {
            die('Erro de Conecxão ('.$this->mysqli->connect_errno.')'.$this->mysqli->connect_error);
        }
        else{
            echo"<center><h1>Conectada :) </h1></center>";
        }
    }
    public function desconectar(){
        return mysqli_close($this->mysqli);
    }
    public function consultar($sql){
        $this->mysqli;
        $r = $this->mysqli->query($sql);
        return $r;
    }

}