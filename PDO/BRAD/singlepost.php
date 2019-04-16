<?php 
include 'PDO.php';

//For fetching a single post
$author="Rambo";
$id=5;
$sql="SELECT * FROM posts WHERE  id=?" ;
// Alternatively we can write also
// $sql="SELECT * FROM posts WHERE author=:author";
$stmt=$pdo->prepare($sql);
// $stmt->execute([$author],[$id]);
// $stmt->execute([$author],[$id]);
$stmt->execute([$id]);
// $stmt->execute(['id'=>$id]);
$post=$stmt->fetch(PDO::FETCH_OBJ);

echo $post->body;





?>