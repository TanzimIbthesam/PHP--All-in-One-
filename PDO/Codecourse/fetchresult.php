<?php 
include 'connect.php';

$query=$pdo->query('SELECT * FROM guests');
// echo '<pre>',print_r($query->fetchAll(PDO::FETCH_ASSOC));
$results=$query->fetchAll(PDO::FETCH_ASSOC);
if($results==true){
    echo "Results are positive";
}else{
    echo "Results are not poitive";
}


?>