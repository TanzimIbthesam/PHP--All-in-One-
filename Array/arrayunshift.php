<?php
//The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array. 
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
?> 