<?php
require_once '../models/Produto.php';

class ProdutoController extends Produto{
    public function listar(){
        $chamada = new Produto;
        $produto=$chamada->listarProduto();
        
        require_once '../views/prod.php';
    }
}
$objeto= new ProdutoController;
$objeto->listar();
