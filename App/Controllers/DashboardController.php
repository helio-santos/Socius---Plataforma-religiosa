<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

//USO APENAS PARA EXIBIÇÃO DE ERROS
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);


/**
 * Description of AppController
 *
 * @author HQ-InnIT
 */

class DashboardController extends Action {

    public function dashboard() {
        
        $this->validaAutenticacao();
        
        $usuario = Container::getModelWithParameter('Usuario', $_SESSION['bank_name']);
        
        $usuario->__set('tb_usuario_email', $_SESSION['email']);
        $usuario->__set('tb_usuario_senha', $_SESSION['senha']);
        
        $usuario->usuarioPorID();
        
        $this->render('principal');
        
        echo '<pre>';
        print_r($usuario);
        echo '</pre>';
    }
    
    public function validaAutenticacao() {
        //Abrindo uma sessão
        session_start();

        if (!isset($_SESSION['id']) || $_SESSION['id'] == '' 
                || !isset($_SESSION['email']) || $_SESSION['email'] == '') {

            header('Location: /?loginError=erro');
        }
        
    }
    
    public function sair() {
        session_start();
        session_destroy();
        header('Location: /');
    }

}
