<?php
/*require_once'config/Router.php';
class Index{
    function __construct($url)
    {
        new Router($url);
        
    }
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    new Index($url);
}*/
require_once 'controllers/ProdutoController.php';
// chamada para script de produtos
$a = new ProdutoController;
if (isset($_GET['cat'])){
    $a->listarTodos($_GET['cat']);
}
else{
    $a->listarTodos();
}
if (isset($_GET['cod_prod'])){
    $a->selecionarProduto($_GET['cod_prod']);
}
