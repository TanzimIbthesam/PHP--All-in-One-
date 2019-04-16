<?php 

include 'connect.php';
$query=$pdo->query('SELECT * FROM guests');

while($r=$query->fetch()){
    echo $r['Message'],'<br>';
}



?>