<?php 
//Remove elements from an array and replace it with new elements:
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
echo "<pre>";
print_r($a1);
echo "</pre>";


?>