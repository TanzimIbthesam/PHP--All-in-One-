<?php
/*
Magic Method
Constructor
//Overloading-We are creating dynamic methods and properties to establish within the class
The __set( $property, $value) method is used to set the private property of the object. When an undefined property is assigned, the __set() method will be triggered and the passed parameters are the property name and value that are set.

*/

class Test{
    private $name;
    public function Hello(){
      echo "Hello","<br>";
    }
    public function __get($param){
        echo "$param does not exist,<br>";
    }
    public function __set($name,$value){
        echo "You are going to test a property of $name to $value";
      
    }
}
$test=new Test;
$test->Hello();
$test->lastname;
$test->age=12;
