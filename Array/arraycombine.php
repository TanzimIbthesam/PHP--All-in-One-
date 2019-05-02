<?php
$players=array('Messi','Ronaldo','Neymar');
$age=array(29,31,21);
$combine=array_combine($players,$age);
echo "<pre>";
print_r($combine);
echo "</pre>";
?> 