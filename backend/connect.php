<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "dbproject";
$dsn = "mysql:host=$server;dbname=$dbname";
try{
    $connect = new PDO($dsn,$username,$password);
    $connect->exec("SET character_set_connection = 'utf8'");
    $connect->exec("SET NAMES 'UTF8'");
}catch (PDOException $error){
    echo "unable to connect".$error->getMessage();
}
?>