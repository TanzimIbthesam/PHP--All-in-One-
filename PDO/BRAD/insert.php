<?php 
include 'PDO.php';
$title="Forrest Gump";
$body="It is an amazing movie";
$author="Tom Hanks";
$sql="INSERT INTO posts(title,body,author) VALUES(?,?,?) ";
$stmt=$pdo->prepare($sql);
$stmt->execute([$title,$body,$author]);
echo "New Post added";





?>