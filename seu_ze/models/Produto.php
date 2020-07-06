<?php
require_once '../config/Db.php';
class Produto{
    //Atributos
    public $nome;
    public $categoria;
    public $cod_barra;
    public $quantidade;
    public $vencimento;
    public $preco_venda;
    //Métodos
    public function cadastrarProduto(){
        $objeto = new Db;
        $objeto->conectar();
        $objeto->consultar("INSERT INTO tb_produto () VALUES()");
         

    }
    public function listarProduto(){
        $objeto = new Db;
        $objeto->conectar();
        $objeto->consultar("SELECT * FROM tb_produto LIMIT 10");
        $produto = $this->r;
        return $produto;
    }
    public function atualizarProduto(){
        $objeto = new Db;
        $objeto->conectar();
        $objeto->consultar("UPDATE ");
    }
    public function apagarProduto(){
        $objeto = new Db;
        $objeto->conectar();
        $objeto->consultar("DELETE ");

    }
}