<?php 
//Magic Method
include_once 'classes/ABC.php';
/*
function __autoload
It is used when you want to access a class  


*/
// function __autoload($class){
//     include_once 'classes/$class.php';
    // This is depreceated
// }
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});
$xyz=new XYZ;
$abc=new ABC;

?>