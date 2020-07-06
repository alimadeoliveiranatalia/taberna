<?php
class Conexao {

    public $conn;
    public function configura(){ /* Recebe como parâmetros o acesso ao servidor */
        $ini = parse_ini_file('login.ini');
        $this->host=$ini['host'];
        $this->user=$ini['user'];
        $this->db=$ini['db'];
        //$this->pass=$ini['pass'];
    }

    public function conectar(){ /* Faz a conecção com o banco de dados */
        $this->configura();
        return $this->conn = new mysqli($this->host,$this->user,$this->db/*,$this->pass*/);
    }

    public function consultar($sql){ /* Faz a consulta ao banco de dados */
       $this->configura();
       $this->conectar();
        return $this->conn->query($sql);
    }
        
    public function desconectar(){

        mysqli_close($this->conn);
    }
}

