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
    public function listarProduto($cat = null){
        $list_prod = new Db;
        $list_prod->conectar();
        $result = $list_prod->consultar('SELECT * FROM tb_produto WHERE categoria LIKE '.$cat.' LIMIT 10');
        return $result;
    }
    public function listarProdAlimento(){
        $list_prod_alim = new Db;
        $list_prod_alim->conectar();
        $result = $list_prod_alim->consultar('SELECT * FROM tb_produto WHERE categoria LIKE \'Alimentos%\'');
        return $result;
    }
    public function listarProdLimpeza(){
        $list_prod = new Db;
        $list_prod->conectar();
        $result = $list_prod->consultar('SELECT * FROM tb_produto WHERE categoria LIKE \'limpeza%\' ');
        return $result;
    }
    public function listarProdHP(){
        $list_prod = new Db;
        $list_prod->conectar();
        $result = $list_prod->consultar('SELECT * FROM tb_produto WHERE categoria LIKE \'higienie%\'');
        return $result;
    }
    public function listarProdBebida(){
        $list_prod = new Db;
        $list_prod->conectar();
        $result = $list_prod->consultar('SELECT * FROM tb_produto WHERE categoria LIKE \'bebida%\'');
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