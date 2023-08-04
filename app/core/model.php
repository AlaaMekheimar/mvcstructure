<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;
use PDO;

class model{
    protected static function connection(){
    
        $options = [
            //required
            'username' => USERNAME,
            'database' => DATABASE,
            //optional
            'password' => PASSWORD,
            'type' => DATABASE_TYPE,
            'charset' => 'utf8',
            'host' => SERVER,
            'port' => '3306'
        ];
        
        $db = new Database($options);
        return $db;
    }       
   
}





