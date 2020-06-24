<?php
include('acesso.ini');
class Db {
    public $conn;
        public function configura(){ /* Recebe como parâmetros o acesso ao servidor */
            $ini = parse_ini_file('acesso.ini');
            $this->host=$ini['host'];
            $this->user=$ini['user'];
            $this->db=$ini['db'];
            $this->pass=$ini['pass'];
        }

        public function conectar(){ /* Faz a conecção com o banco de dados */
            return $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
        }

        public function consultar($sql){ /* Faz a consulta ao banco de dados */
           $this->configura();
           $this->conectar();
            return $this->conn->query($sql);
        }
};
