<?php
// $a1=array("red","green");
// $a2=array("blue","yellow");
// print_r(array_replace($a1,$a2));
//Remove the first element (red) from an array, and return the value of the removed element:
$a=array('red','blue','green');
$b=array('green','silver','blue');
print_r(array_replace($a,$b));
?> 