<?php 
//Update

include 'PDO.php';
$id=6;
$title="Forrest Gump 1994";
$body="It is an amazing movie really awesome";
$author="Tom Hanks";
$sql="UPDATE posts SET body=?,title=? WHERE id=?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$body,$title,$id]);
echo "Post Updated";





?>



