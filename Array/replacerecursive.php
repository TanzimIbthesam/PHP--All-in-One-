<?php 
$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));
echo "<pre>";
print_r(array_replace_recursive($a1,$a2));
echo "</pre>";



?>