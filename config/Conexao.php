<?php
class Conexao{

    static $con = null;
    public static function getConnection(){
    $ip = "sql111.epizy.com";
    $port = "3306";
    $user = "epiz_32123967";
    $pass = "6EkgIVsRkH3Mb";
    $db = "epiz_32123967_dbcatalogo3e2";

    if(!self::$con){
        self::$con = new mysqli($ip, $user, $pass, $db, $port);
        self::$con->set_charset("utf8mb4");

        if(self::$con->connect_error){
            echo self::$con->connect_error;
            die();
        }
    }
    return self::$con;
}
}
?>
