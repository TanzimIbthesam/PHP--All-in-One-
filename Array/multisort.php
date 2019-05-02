<?php
// error_reporting(0);
// $a=array("Dog","Cat","Horse","Bear","Zebra");
$a=array(10,15,12,19,14);
$b=array(100,115,200);
array_multisort($a);
array_multisort($b);
echo "<pre>";
print_r($a);
print_r($b);
echo "</pre>";
?> 