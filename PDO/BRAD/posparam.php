<?php 
include 'PDO.php';
//Positional Parameter 
//user input 
//How to fetch posts where author is Rambo
$author="Rambo";
//Positional params
//If you dont mention fetch Obj in connect.php or while establishing connection you have to mention it later while fetching data
$sql="SELECT * FROM posts WHERE author=?";
// Alternatively we can write also
// $sql="SELECT * FROM posts WHERE author=:author";
$stmt=$pdo->prepare($sql);
$stmt->execute([$author]);
//if you write $sql="SELECT * FROM posts WHERE author=:author"; then write following
// $stmt->execute(['author'=>$author]);
$posts=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach($posts as $post){
    echo $post->title,"<br>";
}





?>