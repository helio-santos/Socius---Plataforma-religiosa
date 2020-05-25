<?php


namespace MF\Model;

use App\Connection;

class Container {
    
    //Criando um metodo estatico
    public static function getModel($model) {
        
        //Recuperando o tipo de modelo
        $class = "\\App\\Models\\".ucfirst($model);
        
        //Recuperando a conexao
        $conn = Connection::getDb();
        
        //retornando a conexao para o modelo desejado e execução do controller
        return new $class($conn);
    }
    
    //Criando um metodo estatico
    public static function getModelWithParameter($model, $dbname) {
        
        //Recuperando o tipo de modelo
        $class = "\\App\\Models\\".ucfirst($model);
        
        //Recuperando a conexao
        $conn = Connection::getDbParameter($dbname);
        
        //retornando a conexao para o modelo desejado e execução do controller
        return new $class($conn);
    }
}
