<?php
require_once '../models/Produto.php';

class ProdutoController extends Produto{
    //O controller busca com a Model uma lista de contatos
    // e envia para a view.
    public function listarTodos(){
        $chamada = new Produto;
        $produto=$chamada->listarProduto();
        require_once '../views/prod.php';
    }
    public function listarAlimentos(){
        $chamada = new Produto;
        $alimentos = $chamada->listarProdAlimento();
        require_once '../views/prod_cat_alim.php';
    }
    public function listarLimpeza(){
        $chamada = new Produto;
        $prodLimpeza = $chamada->listarProdLimpeza();
        require_once '../views/prod_categoriaLimpeza.php';
    }
}

