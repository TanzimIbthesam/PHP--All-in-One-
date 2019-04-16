<?php
include 'Db.php';
$id=$_GET['id'];
$sql="DELETE FROM info_table WHERE id='$id'";
$data=mysqli_query($conn,$sql);
if($data){
    echo "Data successfully deleted";
    
}else{
    echo "Data not deleted";
}





?>