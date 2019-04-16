<?php 

include 'connect.php';
$query=$pdo->query('SELECT * FROM guests');
while($row=$query->fetch(PDO::FETCH_OBJ)){
 echo $row->Message,"<br>";
}

?>