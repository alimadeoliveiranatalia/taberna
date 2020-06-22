<?php
require_once 'conecxao.php';
class Produto {
    //Atributos
    private $cod;
    private $nome;
    private $valor;

    //Métodos
    public function mostrarProduto(){
        $conn = new Conecxao();
        $result = $conn->consultar('SELECT *FROM tb_protuto');
        $conn->error;
        $r = $result->fecth_assoc();

        return $r;
               
    }
    public function listar(){
        $this->mostrarProduto();
        print'<center><table>';
        while($row = $this->result->mostrarProduto()){
            print'<tr>';
            print'<td>'.$row['nome'].'</td>';
            print'<td> R$ '.$row['preco_venda'].'</td>';
            print'</tr>';

        }
        print'</table></center>';
    }
    }
    //Métodos Especiais
    /*public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getValor(){
        return $this->valor;
    }
    public function setValor($v){
        $this->valor = $v;
    }*/
