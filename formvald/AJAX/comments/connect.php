<?php 
//Establishing connection with database
$servername="localhost";
$user="root";
$pass="";
$dbname="mmtuts ajax";

// try{
//     $pdo=new PDO("mysql:host=localhost;dbname=mmtuts ajax;",$user,$pass);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "Connection established successfully";

// }catch (PDOException $e){
//    die("Connection Error").$e->getMessage();
// }
$conn= new mysqli($servername,$user,$pass,$dbname);
if($conn->connect_error){
    die("Connection error").$conn->connect_error;
}else{
    echo "Connection established successfully";
}



?>