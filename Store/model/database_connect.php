<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'tulape';
try{
    $conn = new PDO("mysql:host=$server;dbname=$database",$username,$password);
}catch(PDOException $e){
    echo "Failed connect database: ".$e->getMessage();
}

?>