<?php
class Conexao {

    private $host;
    private $user;
    private $db;
    private $pass;
    private $conecta;

    private function configuar(){
        $dados = parse_ini_file("login.ini");
        $this->host=$dados['host'];
        $this->user=$dados['user'];
        $this->db=$dados['db'];
        $this->pass=$dados['pass'];
    }

    private function conectar(){
        $this->configuar();
        $this->conecta = new mysqli($this->host, $this->user, $this->db, $this->pass);

        // Tratar ERRO DE CONEXAO
        if (!$this->conecta){
            echo "Erro de Conexao";


        } else { //echo "conectou"; 
        };


    }
    
    public function desconectar(){

        mysqli_close($this->conecta);
    }

    public function consulta($sql)
    {
        $this->conectar();
        $r = $this->conecta->query($sql);
        $this->desconectar();
        return $r;

        
    }
}

?>