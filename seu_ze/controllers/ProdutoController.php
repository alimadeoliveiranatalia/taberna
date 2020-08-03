<?php
require_once '../models/Produto.php';

class ProdutoController {
    //O controller busca com a Model uma lista de contatos
    // e envia para a view.
    public function listarTodos($cat = null){
        $chamada = new Produto;
        $produto = $chamada->listarProduto($cat);
        require_once '../views/prod.php';
    }
    
}

