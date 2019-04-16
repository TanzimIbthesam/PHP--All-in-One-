<?php 
//Prepared Statements

include 'connect.php';
$name='John';
$message='Hello World how are you all doing';
// $sql="INSERT INTO guests (Name,Message,Posted)VALUES(:name,:message,NOW())";
$sql="INSERT INTO guests (Name,Message,Posted)VALUES(?,?,NOW())";

$query=$pdo->prepare($sql);
// $query->execute(array(
//     ':name'=>$name,
//     ':message'=>$message
// ));
//More easier
$query->execute(array($name,$message));



?>