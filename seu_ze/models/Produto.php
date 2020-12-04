<?php
require_once '../../config/Db.php';
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
        if (isset($cat)){
            $result = $list_prod->consultar('SELECT * FROM produto WHERE categoria LIKE\''.$cat.'%\'');
        }
        else{
            $result = $list_prod->consultar('SELECT * FROM produto LIMIT 10');
        }
        return $result;
    }
    public function levarProduto($cod){
        $levar_prod = new Db;
        $levar_prod->conectar();
        $result = $levar_prod->consultar('SELECT cod_prod, nome, vencimento, preco_venda FROM tb_produto WHERE cod_prod=$cod');
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
    public function prodfirbce($cod){
        $levar_prod = new Db;
        $levar_prod->conectar();
        $result = $levar_prod->consultar('SELECT tb_produto.cod_prod, tb_produto.nome, tb_produto.vencimento, tb_produto.preco_venda 
        tb_fornecedor.nome_fornecedor, tb_fornecedor.cnpj  FROM tb_produto 
        inner join tb_fornecedor on (tb_fornecedor,cod_fornecedor = tb_produto,codFornecedor_fk ) WHERE tb_produto.cod_prod=$cod');
        return $result;
    }
    

}