<?php 
//While loop in index array
$players=array('','Ronaldo','Mbappe','Romanguli','Reus','Bruno');
$y=count($players);
//  echo $y;
 $x=1;
//  error_reporting(0);
 while($x<$y){
     echo $x.$players[$x],"<br>";
     $x++;
 }
//for loop in index array


// for($x=0;$x<$y;$x++){
//     echo $x.$players[$x];
// }
// $CodeWallTutorialArray = ["Eggs", "Bacon", "HashBrowns", "Beans", "Bread", "RedSauce"];
//           $j=count($CodeWallTutorialArray);
//         for ($i = 0; $i <$j; $i++)  {
//             echo $CodeWallTutorialArray[$i] ."<br />";
//         }
//Loop in Assosiative array
$players=array(
 'name'=>'Messi',
 'club'=>'Fc Barcelona'

);
foreach($players as $key=>$values){
    // echo $key;
    // echo "$key=>$values","<br>";
    echo $key."->".$values;
    
}
//Loop in MultiDimensional array
?>