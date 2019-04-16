<?php 
//Prepared Statements for inserting last ID
include 'connect.php';
$query=$pdo->query('SELECT * FROM guests');
if($query->rowCount()){
    while($row=$query(PDO::FETCH_OBJ)){
    echo $row->Message,'<br>';
    }
}else{
    echo "No results";
}


?>