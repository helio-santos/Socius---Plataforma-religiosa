<?php

namespace App\Models;

use MF\Model\Model;

//USO APENAS PARA EXIBIÇÃO DE ERROS
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

/**
 * Description of newPHPClass
 *
 * @author HQ-InnIT
 */
class Usuario extends Model {

    //Atributos da Classe
    private $tb_usuario_id;
    private $tb_usuario_nome;
    private $tb_usuario_sobrenome;
    private $tb_usuario_email;
    private $tb_usuario_fone_celular;
    private $tb_usuario_senha;
    private $tb_usuario_tipo_acesso;
    private $tb_usuario_status;
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

    //Metodo para salvar os dados do usuário
    //Metodo para listar usuário por ID
    public function usuarioPorID() {
        //Criando a query
        $query = "SELECT tb_usuario_id, tb_usuario_nome, tb_usuario_email, tb_usuario_sobrenome, tb_usuario_tipo_acesso, tb_usuario_status "
                . "FROM tb_usuario "
                . "WHERE tb_usuario_email = :email AND tb_usuario_senha = :senha";

        $stmt = $this->db->prepare($query);

        //Passando os parametros de consdulta
        $stmt->bindValue(':email', $this->__get('tb_usuario_email'));
        $stmt->bindValue(':senha', $this->__get('tb_usuario_senha'));

        $stmt->execute();

        $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

        //Teste para saber se objeto retornado é vazio ou não
        if ($usuario['tb_usuario_id'] != '') {
            $this->__set('tb_usuario_id', $usuario['tb_usuario_id']);
            $this->__set('tb_usuario_email', $usuario['tb_usuario_email']);
            $this->__set('tb_usuario_nome', $usuario['tb_usuario_nome']);
            $this->__set('tb_usuario_sobrenome', $usuario['tb_usuario_sobrenome']);
            $this->__set('tb_usuario_tipo_acesso', $usuario['tb_usuario_tipo_acesso']);
            $this->__set('tb_usuario_status', $usuario['tb_usuario_status']);
            
        }

        return $this;
    }

}
