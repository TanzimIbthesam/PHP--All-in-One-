<?php 
//Sort the elements of the $cars array in ascending alphabetical order:
$cars=array("Volvo","BMW","Toyota");
sort($cars);
$clength=count($cars);
for($x=0;$x<$clength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }



?>