<!-- <?//php 
//$a1=array("red","green");
//$a2=array("blue","yellow");
//print_r(array_merge($a1,$a2));







?> -->
 <?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
echo "<pre>";
print_r(array_merge_recursive($a1,$a2));
echo "<pre>";
?> 