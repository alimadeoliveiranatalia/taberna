<?php
require_once '../config/Db.php';
class Produto extends Db{
    //Atributos
    public $nome;
    public $categoria;
    public $cod_barra;
    public $quantidade;
    public $vencimento;
    public $preco_venda;
    //Métodos
    public function cadastrarProduto(){
        $cad_prod = new Db;
        $cad_prod->conectar();
        $cad_prod->consultar("INSERT INTO tb_produto () VALUES()");
         

    }
    public function listarProduto(){
        $list_prod = new Db;
        $list_prod->conectar();
        $result = $list_prod->consultar("SELECT * FROM tb_produto LIMIT 10");
        return $result;
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