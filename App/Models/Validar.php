<?php

namespace App\Models;

use MF\Model\Model;

/**
 * Description of ValidaBaseDados
 *
 * @author HQ-InnIT
 */
class Validar extends Model{
    //Atributos da classe
    private $id;
    private $tb_email;
    private $tb_senha;
    private $tb_banco;
    
    //Metodos magicos para recuperar dados do objeto
    public function __get($atributo) {
        return $this->$atributo;
    }
    
    //Metodos magicos para setar dados no objeto
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
    
    //Metodo para salvar dados na tabela
    
    //Metodo para validar usuário e qual banco usar
    public function validarUsuario() {
        //Criando a query
        $query = "SELECT id, tb_email, tb_banco, tb_mudar FROM tb_banco WHERE tb_email = :email AND tb_senha = :senha";
        $stmt = $this->db->prepare($query);
        
        //Passando os parametros de consdulta
        $stmt->bindValue(':email', $this->__get('tb_email'));
        $stmt->bindValue(':senha', $this->__get('tb_senha'));
        
        $stmt->execute();
        
        $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);
        
        //Teste para saber se objeto retornado é vazio ou não
        if($usuario['id'] != '' && $usuario['tb_email'] != ''){
            $this->__set('id', $usuario['id']);
            $this->__set('tb_email', $usuario['tb_email']);
            $this->__set('tb_banco', $usuario['tb_banco']);
            $this->__set('tb_mudar', $usuario['tb_mudar']);
            
        }
        
        return $this;
    }
    
    
}
