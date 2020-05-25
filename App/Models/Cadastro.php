<?php

namespace App\Models;

use MF\Model\Model;
/**
 * Description of newPHPClass
 *
 * @author HQ-InnIT
 */
class Cadastro extends Model{
    
    //Criando os atributos da Classe
    private $tb_usuario_id;
    private $tb_usuario_nome;
    private $tb_usuario_sobrenome;
    private $tb_usuario_email;
    private $tb_usuario_fone_celular;
    private $tb_usuario_login;
    private $tb_usuario_senha;
    private $tb_usuario_acesso_tipo;
    private $tb_usuario_status; //Permitir/Negar uso do banco de dados na nuvem
    private $tb_congregacao_id;
    private $tb_setor_id;
    
    //Metodos magicos para recuperar dados do objeto
    public function __get($atributo) {
        return $this->$atributo;
    }
    
    //Metodos magicos para setar dados no objeto
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
    
    
}
