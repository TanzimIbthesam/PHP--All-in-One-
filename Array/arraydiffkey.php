<?php 

$color1=array('Red','Yellow','Green','Blue');
$color2=array('Red','Yellow','Green');

echo "<pre>";
$diff=array_diff_key($color1,$color2);
print_r($diff);
echo "</pre>";





?>