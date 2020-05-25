<?php



namespace MF\Model;


abstract class Model {
    
    //Criando uma variável protegida
    protected $db;
    
    //Construtor da classe que recebe a conexao
    public function __construct(\PDO $db) {
        $this->db = $db;
    }
}
