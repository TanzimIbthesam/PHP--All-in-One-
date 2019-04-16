<?php 
//Limit
include 'PDO.php';
$author="Rambo";
$is_published=true;
$sql="SELECT * FROM posts WHERE author=? && is_published=? LIMIT 1";
$stmt=$pdo->prepare($sql);
$stmt->execute([$author,$is_published]);
$posts=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach($posts as $post){
    echo "$post->title";
}




?>