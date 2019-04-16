<?php 
//Row Count
include 'PDO.php';

// $sql="SELECT * FROM posts WHERE  author=?" ;
$author="Arnold";
$stmt=$pdo->prepare("SELECT * FROM posts WHERE  author=?");
$stmt->execute([$author]);
$rowcount=$stmt->rowCount();

echo $rowcount;






?>