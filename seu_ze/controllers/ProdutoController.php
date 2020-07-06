<?php
require_once '../models/Produto.php';

class ProdutoController extends Produto{
    public function listar(){
        $chamada = new Produto;
        $chamada->listarProduto();
        $this->produto;
        require_once '../views/prod.php';
    }
}
