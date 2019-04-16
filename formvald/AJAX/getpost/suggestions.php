<?php 

$existingNames=array("Daniel","Denis","Danny","Jane");

if(isset($_POST['suggestions'])){
    $name=$_POST["suggestions"];
      if(!empty($name)){
        foreach($existingNames as $existingName){
            if(strpos($existingName,$name)!==false){
                echo  $existingName;
                echo "<br>";
            }
      }
   
    }
}


?>