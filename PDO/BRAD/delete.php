<?php 
//Delete from posts
include 'PDO.php';
$id=7;
$sql="DELETE from posts WHERE id=?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$id]);
echo "Post deleted";





?>