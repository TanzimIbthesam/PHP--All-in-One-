<?php 
/*
The array_intersect_key() function compares the keys of two (or more) arrays, and returns the matches.

This function compares the keys of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.

*/
$colors=array(
    'Color'=>'Blue',
    'Origin'=>'UK',
    'Shade'=>'Excellent'
);

$colorstwo=array(
    'Color'=>'Blue',
    'Origin'=>'UK',
    'Shade'=>'Good'
);
$colorstwo=array(
    'Color'=>'Blue',
    'Origin'=>'Uk',
    'Shade'=>'Average'
);
$allarray=array_intersect_key($colors,$colorstwo,$colorstwo);
print_r($allarray);
?>