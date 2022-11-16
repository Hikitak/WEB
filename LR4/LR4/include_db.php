<?php
session_start();
error_reporting(0);

/*define('DB_HOST', 'localhost');*/
define('DB_USER', 'root');
define('DB_PASSWORD', '');
/*define('DB_NAME', 'exhibition');*/
try{
    $mysql = new PDO('mysql:host=localhost;dbname=pizza_delivery', DB_USER, DB_PASSWORD);
}   catch (PDOException $e){
    print "Error!: " . $e->getMessage();
    die();
}

?>