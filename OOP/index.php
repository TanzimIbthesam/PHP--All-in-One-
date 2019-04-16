<?php
/*
Class-Defines what an object is the properties or characterestics a class can have
Object-Instance of a class



*/
class Person{
    public $name;
    public $age;

   public function hello(){
       echo "My Name is Tanzim";
   }
   public function __construct($name,$age){
       $this->name=$name;
       $this->age=$age;
   }
   

}

$info=new Person('Tanzim',30);
// echo $info->gel();
echo $info->name,"<br>";
 /*
Interitance


 */
class Employee{
    public $jobtitle;

    public function _construct(){

    }
}

?>