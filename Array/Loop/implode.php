<?php 
//Implode converts array to string
//Explode converts string to array
// $arr=array('Jack','Jill','John','Jane');
// $str= implode(",",$arr);
// echo $str,"<br>";
// $arr=explode(",","$str");
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

//explode-string converted into an array
$tags='HTML,CSS,JS,JQUERY,PHP,JAVA,MYSQL,NOSQL,NODE JS,DJANGO';
echo $tags;
$explode=explode(",",$tags);
echo "<pre>";
print_r($explode);
echo "<pre>";
$impl=implode(",",$explode);
echo $impl,"<br>";

?>