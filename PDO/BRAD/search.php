<?php 
include 'PDO.php';
$search="%J%";
$sql='SELECT * FROM posts WHERE title LIKE ?';
$stmt=$pdo->prepare($sql);
$stmt->execute([$search]);
$posts=$stmt->fetchAll(PDO::FETCH_OBJ);

foreach($posts as $post){
    echo $post->title;
}



?>