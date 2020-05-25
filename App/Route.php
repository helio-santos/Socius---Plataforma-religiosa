<?php

//Namespace
namespace App;

use MF\Init\Bootstrap;

//Classe que implemeta as todas as rotas
class Route extends Bootstrap{
    
    //Função para iniciar as rotas solicitadas
    protected function initRoutes(){
        
        //Rota para chamada: 'Principal'
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );
        
        //Rota para chamada: 'Nova Conta'
        $routes['nova-conta'] = array(
            'route' => '/nova-conta',
            'controller' => 'indexController',
            'action' => 'novaConta'
        );
        
        //Rota para chamada: 'Validar usuario e banco'
        $routes['autenticar'] = array(
            'route' => '/autenticar',
            'controller' => 'AuthController',
            'action' => 'autenticar'
        );
        
        //Rota para chamada: 'Validar usuario e banco'
        $routes['dashboard'] = array(
            'route' => '/dashboard',
            'controller' => 'DashboardController',
            'action' => 'dashboard'
        );
        
        //Rota para chamada: 'Validar usuario e banco'
        $routes['sair'] = array(
            'route' => '/sair',
            'controller' => 'DashboardController',
            'action' => 'sair'
        );
        
        //Passando as 'routes' como parametro para icicialização das rotas
        $this->setRoutes($routes);
    }

   
}

