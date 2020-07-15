<?php
require_once '../controllers/ProdutoController.php';
// chamada para script de produtos
$a = new ProdutoController;
$a->listar();
