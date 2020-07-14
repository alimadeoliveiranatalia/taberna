<?php
class Controller{
    //Métodos
    public function modelProduto(){
        require_once 'ProdutoController.php';
        $objeto = new ProdutoController;
        $objeto->listar();
        require_once '../views/prod.php';
    }
    public function pageNotFound(){
        echo"ERROR 404";
    }
}
$a = new Controller;
$a->modelProduto();