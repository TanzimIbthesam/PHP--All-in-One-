<?php 
include "connect.php";
$commentNewCount=$_POST["commentNewCount"];
$sql="SELECT * FROM comments LIMIT $commentNewCount";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<p>";
                echo $row["author"];
                echo "<br>";
                echo $row["comments"];
                echo "</p>";
            }
        }else{
            echo "There are no comments";
        }



?>