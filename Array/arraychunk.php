<?php
// $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
// print_r(array_chunk($cars,3));
$playersage=array(
    'Messi'=>27,
    'Ronaldo'=>29,
    'Mbappe'=>20,
    'Djelit'=>17
);
echo "<pre>";
print_r(array_chunk($playersage,2,true));
echo "</pre>";
?> 