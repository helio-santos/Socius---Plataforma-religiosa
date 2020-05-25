<?php

namespace MF\Controller;

/**
 * Description of Action
 *
 * @author HQ-InnIT
 */
abstract class Action {

    //Atributo da classe
    protected $view;

    //Construtor da classe
    public function __construct() {
        $this->view = new \stdClass();
    }

    //Metodo para renderização de Views
    protected function render($view, $layout = 'layout') {
        $this->view->page = $view;
        
        //Testando a existencia da View
        if(file_exists('../App/Views/'.$layout.'.phtml')){
            require_once '../App/Views/'.$layout.'.phtml';
            
        }else{
            $this->content();//Caso o layout não seja não seja encontrado
        }
        
    }

    //Metodo para carregamento de todas as Views
    protected function content() {

        //Trabalhando dinamicamente os Controllers e identificando o indice de cada um
        $classAtual = get_class($this);
        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
        $classAtual = strtolower(str_replace('Controller', '', $classAtual));

        //Requisitando o controller correspondente dinamicamente
        require_once "../App/Views/" . $classAtual . "/" . $this->view->page . ".phtml";
    }

}
