<?php

namespace MF\Init;

/**
 * Description of Bootstrap
 *
 * @author HQ-InniT
 */
abstract class Bootstrap {

    //Atributos da Classe
    private $routes;
    
    abstract protected function initRoutes();

    //Metodo construtor
    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    //Metodos Getters e Setters para rotas
    public function getRoutes() {
        return $this->routes;
    }

    public function setRoutes(array $routes) {
        $this->routes = $routes;
    }

    //Metodo para rodar a inicialização das rotas
    protected function run($url) {

        foreach ($this->getRoutes() as $key => $route) {
            
        if ($url == $route['route']) {
                $class = "App\\Controllers\\" . ucfirst($route['controller']);

                $controller = new $class;

                $action = $route['action'];

                $controller->$action();
            }
        }
    }

    //Retonando a URL acessada pelo usuário
    protected function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

}
