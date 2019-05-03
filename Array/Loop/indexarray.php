<?php 
//index
// $cars=array('Ferrari','Mazerati','BMW');

// // echo "My favorite car is ".$cars[1];
// foreach($cars as $values){
//     echo $values,"<br>";
// }
//Assosiative Array-Arrays with named keys
// $cars=array(
//     'Brand'=>'Ferrari',
//     'Country of Origin'=>'Italy',
//     'Year '=>1939
// );

// // echo "<pre>";
// // print_r($cars);
// // echo "</pre>";
// echo "The details of Ferrari are as Follows","<br>";
// foreach($cars as $key=>$values){
    
//     echo "<pre>";
//     echo "$key=>$values";
//     echo "</pre>";
//  }
//Multidimensional array
$cars=array(
    'Ferrari'=>array(
      'Brand'=>'Ferrari',
       'Country of Origin'=>'Italy',
      'Year '=>1939
    ),
    'Mercedes'=>array(
        'Brand'=>'Mercedes',
         'Country of Origin'=>'Germany',
        'Year '=>1926
      )
);
// echo "<pre>";
// print_r($cars);
echo $cars['Ferrari']['Brand'];
// echo "</pre>";

?>