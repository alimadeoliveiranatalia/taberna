<?php
class Router
{
    public function __construct($url)
    {
        /** 
         * home/display/ 
         */
        $url = rtrim($url,'/');
         /** 
         * home/display
         */
        $url = explode('/',$url);
        /*
        $url[0] = home - controller
        $url[1] = display - models - method
        $url[2] = data - views - container
        */
        $controller = $url[0].'Çontroller';
        require_once'../controllers/'.$controller.'.php';
        $a = new ProdutoController;
        if (isset($_GET['cat'])){
         $a->listarTodos($_GET['cat']);
        }
        else{
        $a->listarTodos();
        }
    }

}