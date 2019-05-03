<?php 
$gadgets=array(
    'Smartphone'=>array(
      'Brand'=>'Huawei',
       'Model'=>'Y92019'
    ),
    'Laptop'=>array(
        'Brand'=>'Lenevo',
        'Model'=>'K45'
    )
);
// echo "<pre>";
// print_r($gadgets);
// echo "</pre>";
foreach($gadgets as $gadget=>$values){
    echo $gadget,"<br>";
   foreach($values as $name){
       echo $name,"<br>";
   }
}

?>