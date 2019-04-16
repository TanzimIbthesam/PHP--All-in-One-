<?php 
//Method overriding
class Base{
    public function abc(){
        echo "The method is ABC";
    }
}
trait test{
    public function abc(){
        echo "This is the job ";
    }
}
class Child extends Base{
    // use test;
    // public function abc(){
    //     echo "Method from child class";
    // }
}

$obj= new Child;
$obj->abc();


?>