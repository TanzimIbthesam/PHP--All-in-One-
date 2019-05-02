<?php 
//array_diff

/*
The array_diff() function compares the values of two (or more) arrays, and returns the differences.

This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.


*/
$boxone=array('Pencil','rubber','sharpner');
$boxtwo=array('Pencil','rubber','sharpner','Pen','Ruler','Stadelar','colors');
$diff=array_diff($boxtwo,$boxone);
echo "<pre>";
print_r($diff);
echo "</pre>";


?>