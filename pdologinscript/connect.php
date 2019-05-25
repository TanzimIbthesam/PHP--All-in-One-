<?php 
$host="localhost";
$user="root";
$password="";
$dbname="PDO";

try{
    $pdo=new PDO("mysql:host=localhost;dbname=PDO",$user,$password);
    echo "Connection established succesfully";
} catch (PDOException $e) {
die("Connection error").$e->getMessage();
}




?>