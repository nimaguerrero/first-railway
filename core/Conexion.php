<?php
require_once 'env.php'; 

class Conexion{

    private static $db_usuario  = DATABASE['username'];
    private static $db_pass     = DATABASE['password'];
    private static $db_servidor = DATABASE['host'];
    private static $db_nombre   = DATABASE['database'];
    private static $db_charset  = DATABASE['charset'];
    private static $db_port     = DATABASE['port'];


    /**
    * Conexion a la base de datos con el usuario root
    * Tenemos que crear otro usuario para solo hacer select para gente externa (auditores).
    * @return conexion PDO
    */
    public static function conectar(){

        try{
            $dcn = "mysql:host=".self::$db_servidor.";port=".self::$db_port.";dbname=".self::$db_nombre;
            $cn = new PDO($dcn,self::$db_usuario,self::$db_pass);
            $cn->exec("SET CHARACTER SET".self::$db_charset);
            echo "Conectado perro";
            return $cn;

        }catch (PDOException $exception){
            // die($exception->get_Message());
            die($exception->getMessage());
            // exit($exception->getMessage());
            
        }    
    }
}

#################### Asi activamos la conexion
// Conexion::conectar();

/* 
    try{
        $cn = new PDO("mysql:host={$db['host']};dbname={$db['db']}", $db['username'], $db['password']);
        $cn = new PDO("mysql:host=localhost;dbname=mixingdb","mixing","nwpzlkwVrlq7sow8");

    }catch (PDOException $exception){
        
    }    
*/