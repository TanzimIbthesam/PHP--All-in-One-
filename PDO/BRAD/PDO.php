<?php 
//Connection PHP to the database
$servername="localhost";
$username="root";
$pass="";
$dbname="bradpdo";

try{
    $pdo=new PDO("mysql:host=localhost;dbname=bradpdo;",$username,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    echo "Connection established successfully <br>";
}catch(PDOException $e){
  die("Connection error").$e->getMessage();
}


?>