<?php 
//Fetch assoc and fetch Obj
include 'PDO.php';
$query=$pdo->query('SELECT * FROM posts');
while($row=$query->fetch(PDO::FETCH_ASSOC)){
    // print_r($row);
    echo $row['title'],"<br>";
   
}
// while fetching an object
// while($row=$query->fetch(PDO::FETCH_OBJ)){
//     echo $row->title,"<br>";
   
// }

   
?>