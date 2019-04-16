<?php 
/*
This method takes two parameters. The first parameter $function_name will automatically receive the undefined method name, while the second $arguments will receive multiple arguments of the method as an array.



*/
class Person
{                             
    function say()
    {
           echo "Hello, world!<br>";
    }     

    function __call($funName, $arguments)
    {
          echo "The function you called：" . $funName . "(parameter：" ;  // Print the method's name that is not existed.
          print_r($arguments); // Print the parameter list of the method that is not existed.
          echo ")does not exist!！<br>\n";                   
    }                                         
}
$Person = new Person();           
$Person->run("teacher"); // If the method which is not existed is called within the object, then the __call() method will be called automatically.
$Person->eat("John", "apple");             
$Person->say();





?>