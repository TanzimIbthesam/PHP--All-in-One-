<?php 
/*
Array is one type of variable in which stores multiple valuesinside a single variable


*/
//Index array
// $x=array("a","b","c");

// // echo $x[0];
// $arraycount=count($x);
// for($x=0;$x<=$arraycount;$x++){
//     echo $x,"<br>";

// }
// foreach($x as $value){
//     echo $value,"<br>";
// }
//Assosiative array
$age=array(
    'Messi'=>27,
    'Ronaldo'=>25
);

foreach($age as $key=>$value){
    echo "$key=>$value","<br>";
}
//Multi-Dimensional Array
$profile=array(
    'John'=>array('Age'=>25,'Profession'=>'Coder','Favourite food'=>'Bread'),
    'BRAD'=>array('Age'=>25,'Profession'=>'Coder','Favourite food'=>'Bread'),
    'JEnny'=>array('Age'=>25,'Profession'=>'Coder','Favourite food'=>'Bread'),
);
echo $profile['John']['Profession'],"<br>";

$mobiles=array(
    array("Samsung",93,93000),
    array("Huawei",96,75000)
    );
// print_r($mobiles);
echo "The name of the brand is ".$mobiles[0][0]." its stock is ".$mobiles[0][1]." the amount sold is ".$mobiles[0][2],"<br>";
echo "The name of the brand is ".$mobiles[1][0]." its stock is ".$mobiles[1][1]." the amount sold is ".$mobiles[1][2];
?>