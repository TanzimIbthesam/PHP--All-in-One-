<?php 
/*
construct-when object is prepared then it is used 
destruct-
PHP 5 introduces a destructor concept similar to that of other object-oriented languages, such as C++. The destructor method will be called as soon as there are no other references to a particular object, or in any order during the shutdown sequence. 

*/
class StudentClass{
    // public function Studentone(){
    //     echo "He is phenomenal";
    // }
    public function __construct(){
        echo "Got value from a constructor function <br>";
    }
    public function __destruct(){
        unset($this->tech);
        echo "Echoing from destructor function";
    }
}
$tech= new StudentClass;
// $tech->Studentone();

?>