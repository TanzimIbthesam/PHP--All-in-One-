<?php 
// $boxone= array(
//     '1'=>'Red',
//     '2'=>'Green',
//     '3'=>'Blue',
//     '4'=>'Black',
    
// );
// $boxtwo=array(
//     '1'=>'Red',
//     '2'=>'Blue',
//     '3'=>'Green',
// );
error_reporting(0);
$boxone= array(
    array(
        '1'=>'Red'
        
        
    ),
    array(
        
        '2'=>'Green'
        
    ),
    array(
       
        '3'=>'Blue'
       
    ),
    array(
        
        '4'=>'Black'
    )
    
    
);
$boxtwo= array(
    array(
        '1'=>'Red'
        
        
    ),
    array(
        
        '2'=>'Blue'
        
    ),
    array(
       
        '3'=>'Green'
       
    )
   
    
    
);
$diff=array_diff_assoc($boxone,$boxtwo);
echo "<pre>";
print_r($diff);
echo "</pre>";




?>