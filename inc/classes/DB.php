<?php

if(!defined('__CONFIG__')) {
    exit('You do not have a config');
}
class DB{
    protected static $conn;
    private function __construct(){
        try{
            self:: $conn=new PDO('mysql:charset=utf8mb4;host=localhosthost;port=3306;dbname=login_course','root','root');
            self:: $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self:: $conn->setAttribute(PDO::ATTR_PERSISTENT,false);

        }catch(PDOException $e){
            echo "Could not connect to Databaswe.";
            $e->getMessage();
            $e->exit;

            
        }


    }
    public static function getConnection(){
        if(!self::$conn){
                new DB();
        }
        return self::$conn;
    }


}


?>