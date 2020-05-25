<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action{
    
    //METODO PARA CHAMAR A PAGINA PRINCIPAL DE LOGIN
    public function index() {
        $this->render('index');
    }
    
    //Metodo para disparar a criação de novo cadastro
    public function novaConta() {
        $this->render('cadastro');
    }
    
}