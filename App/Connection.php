<?php

namespace App;

/**
 * Description of Connection
 *
 * @author HQ-InnIT
 */
class Connection {

    //Metodo do conexao estatico para que precise estanciar a classe
    public static function getDb() {
        try {
            //Script de conexao com o banco de dados
            $conn = new \PDO("mysql:host=bd_validabanco.mysql.dbaas.com.br:3306;dbname=bd_validabanco;charset=utf8",
                    "bd_validabanco",
                    "TI@hq2018");

            return $conn;
            
        } catch (\PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    //Metodo do conexao estatico para que precise estanciar a classe
    public static function getDbParameter($dbname) {
        try {
            //Script de conexao com o banco de dados
            $conn = new \PDO("mysql:host=bd_socius.mysql.dbaas.com.br:3306;dbname=$dbname;charset=utf8",
                    $dbname,
                    "TI@hq2018");

            return $conn;
            
        } catch (\PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }

    

}
