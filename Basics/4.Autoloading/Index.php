<?php


include 'includes/autoloader.inc.php';
// include "lib/Teacher.php";
// spl_autoload_register(function($className){
//   include("lib/".$className.".php");
// });

$teacher=new Teacher();
$teacher->teacherprofile();
$student=new Student();
$student->newprofile();
$gadgets=new Gadgetone();
$gadgets->gadgetarmy();


?>