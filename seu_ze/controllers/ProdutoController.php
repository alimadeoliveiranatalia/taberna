<?php
require_once '../models/Produto.php';

class ProdutoController extends Produto{
    //O controller busca com a Model uma lista de contatos
    // e envia para a view.
    public function listar(){
        $chamada = new Produto;
        $produto=$chamada->listarProduto();  
    }
}

