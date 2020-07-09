<?php
class Db{
    //Atributos
    private $mysqli;
    //Métodos
    public function conectar(){
        $this->mysqli = new mysqli('localhost','root','','taberna');
        if ($this->mysqli->connect_error) {
            die('Erro de Conecxão ('.$this->mysqli->connect_errno.')'.$this->mysqli->connect_error);
        }
        else{
            //echo"<center><h1>Conectada :) </h1></center>";
        }
    }
    public function desconectar(){
        return mysqli_close($this->mysqli);
    }
    public function consultar($sql){
        $this->mysqli;
        return $this->mysqli->query($sql);
        
    }

}