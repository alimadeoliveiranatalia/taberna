<?php
include("acesso.ini");
class Db{
    //Atributos
    private $host;
    private $user;
    private $db;
    private $pass;
    public $mysqli;
    //Métodos
    public function configurar(){
        $ini = parse_ini_file("acesso.ini");
        $this->host = $ini["host"];
        $this->user = $ini["user"];
        $this->db = $ini["db"];
        $this->pass = $ini["pass"];

    }
    public function conectar(){
        $this->configurar();
        $this->mysqli = new mysqli($this->host,$this->user,$this->db,$this->pass);
        if ($this->mysqli->connect_error) {
            die('Erro de Conecxão ('.$this->mysqli->connect_errno.')'.$this->mysqli->connect_error);
        }
        else{
            echo"<center><h1>Conectada :) </h1></center>";
        }
    }
}