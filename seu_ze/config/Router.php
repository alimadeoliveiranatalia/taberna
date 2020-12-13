<?php
class Router
{
    private $config;
    private $url;
    public $mvc;
    private $params;

    public function __construct()
    {
        $this->config = new Config();

        $this->url=$this->request()['url'];
        $this->cleanUrl();
        $this->setMVC();
        $this->loadMVC();

    }

    /* Remove a primeira barra e também será responsável por limpezas de caracteres na nossa URL em caso de atualizações
    no nosso framework */
    private function cleanUrl($url=true, $params=false){
        if($url){
            if (preg_match('/.{1,}(/){1}$/', $this->url)){
                $this->url=substr($this->url,0,-1);
            }
        }
        if($params){
            $this->params=substr($this->url,1);
        }
    }
    /* Pega a nossa URL devidamente tratada no passo anterior e cria uma matriz(array) para o próximo método */
    private function urlArray(){
        if (preg_match('/.{1,}(/){1}$/', $this->url)){
            $this->url=substr($this->url,0,-1);
        }
    }
    /* Ele vai identificar qual o módulo deve carregar na nossa aplicação a partir do Controller */
    private function setMVC(){
        if (isset($this->config->router[$this->url])){
            $this->mvc = $this->config->router[$this->url];
        }
        else{
            $this->cleanUrl(false,true);
            $this->params = explode('/', $this->params);
            $this->params[0] = $this->upperCamelCase($this->params[0]);
            if ($this->url == '/'){
                $this->mvc == array(
                    'model'=>'Index',
                    'controller' => 'Index',
                    'action' => 'index',
                );
            }
        }
        if (!isset($this->mvc['action']) || empty($this->mvc['action'])){
            $this->mvc['action']='Index';
        }
        if (!isset($this->mvc['controller']) || empty($this->mvc['controller'])){
            $this->mvc['controller']='Index';
        }
    }
    /* E por fim este método carrega a Controller específico e já indica  uma função deste controller */
    private function loadMVC(){
        $controller = $this->mvc['controller'].'_Controller';
        $action = $this->mvc['action'];

        $controller = new $controller($this->mvc);
        $controller->action();
    }

}