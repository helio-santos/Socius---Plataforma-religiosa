<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

/**
 * Description of AuthController
 *
 * @author HQ-InnIT
 */
class AuthController extends Action{
    
    //METODO PARA RENDERIZAR A VIEW INDEX
    public function autenticar() {

        //Estanciando o modelo de usuario
        $usuario = Container::getModel('Validar');

        //Setando o objeto
        $usuario->__set('tb_email', $_POST['email']);
        $usuario->__set('tb_senha', ($_POST['senha']));

        $usuario->validarUsuario();

        if ($usuario->__get('id') != '' && $usuario->__get('tb_email') != '') {
            
            //Abrindo uma sessão e criando as variáveis de sessão
            session_start();
            
            $_SESSION['id'] = $usuario->__get('id');
            $_SESSION['bank_name'] = $usuario->__get('tb_banco');
            $_SESSION['email'] = $usuario->__get('tb_email');
            $_SESSION['senha'] = $usuario->__get('tb_senha');
            $_SESSION['mudar'] = $usuario->__get('tb_mudar');
            
            header('Location: /dashboard');
            
        } else {
            header('Location: /?login=erro');
        }
    }
}
