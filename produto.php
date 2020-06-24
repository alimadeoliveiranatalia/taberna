<?php
require_once 'Db.php';
class Produto {
    //Atributos
    private $cod;
    public $nome;
    public $categoria;
    private $quantidade;
    public $vencimento;
    public $valor;
    //Métodos
    public function adcionarProduto(){
        $conn = new Db;
        return $conn->consultar("INSERT INTO (nome) VALUE ($this->getNome())");
    }    
    public function listarProduto(){
        $conn = new Db;
        return $conn->consultar("SELECT *FROM tb_produto");
    }
    

    //Métodos Especiais
    public function getNome(){
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
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria($grupo){
        $this->categoria = $grupo;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade($quant){
        $this->quantidade = $quant;
    }
    public function getVencimento(){
        return $this->vencimento;
    }
    public function setVencimento($vc){
        $this->vencimento = $vc;
    }
    

}
