<?php 
//Object Oriented 
$servername="localhost";
$user="root";
$password="";
$dbname="testdb";

// $conn=new mysqli($servername,$user,$password);

// if($conn->connect_error){
//     die("Connection failed").$conn->connect_error;
// }else{
//     echo "Connection succesful";
// }
//Procedural 
// $conn=mysqli_connect($servername,$user,$password);

// if(!$conn){
//     die("Connection failed").mysqli_connect_error;
// }else{
//     echo "Connection succesful";
// }
try{
  $pdo=new PDO("mysql:host=localhost;dbname=testdb",$user,$password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo "Connection establsihed successfully";
}catch(PDOException $e){
  die("Connection failed").$e->Message();
}












// try{
//     $pdo=new PDO("mysql:host=localhost;dbname=testdb",$user,$password );  
//     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
//     echo "Connection established successfully";
// }
// catch(PDOException $e ){
//   die("Connection failed").$e->getMessage();
// }




?>