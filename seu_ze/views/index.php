<?php
require_once '../controllers/ProdutoController.php';
// chamada para script de produtos
$a = new ProdutoController;
if (isset($_GET['cat'])){
    $a->listarTodos($_GET['cat']);
}
else{
    $a->listarTodos();
}
