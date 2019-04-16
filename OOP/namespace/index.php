<?php 
/*
As the size of your PHP code library increases, the more likely you will accidentally reuse a function or class name that has been declared before. The problem is exacerbated if you attempt to add third-party components or plugins; what if two or more code sets implement a ‘Database’ class?
Namespaced code is defined using a single namespace keyword at the top of your PHP file. It must be the first command (with the exception of declare) and no non-PHP code or white-space can precede the command, e.g.

*/
namespace second;
include 'nms.php';
include 'nmstwo.php';
use second\nmstwo as NewA;
// $tech=new nmstwo;
// $obj= new nms;/*Qualified classname */
$obj=new NewA;
$tech= new \first\nms;
$tech= new \first\mns;



?>