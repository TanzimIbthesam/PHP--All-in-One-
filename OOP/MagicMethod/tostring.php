<?php 
/*

The __toString() method allows a class to decide how it will react when it is treated like a string. For example, what echo $obj; will print. This method must return a string, as otherwise a fatal E_RECOVERABLE_ERROR level error is emitted. 

*/
class Student{
    public $name;
    public function __construct($name){
        $this->name=$name;
       

    }
    // public function Cname(){
    //       echo "His name is ".$name;
    // }
    public function __toString(){
        return "$this->name";
    }
}
$stu= new Student('Tanzim');
echo $stu;



?>