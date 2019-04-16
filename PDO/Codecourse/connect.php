<?php 
/*
PDO-You can work with multiple datbase


*/
$servername="localhost";
$username="root";
$password="";

try{
    $pdo= new PDO("mysql:host=localhost;dbname=guestpost;",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Data connected successfully <br>";
}catch (PDOException $e){
   echo "Connection failed".$e->getMessage();
}




?>