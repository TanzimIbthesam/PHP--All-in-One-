<?php 
/*
__construct() is the method name for the constructor. The constructor is called on an object after it has been created, and is a good place to put initialisation code, etc




*/
class Student{
    public $age;
    public $rollno;
    public $marks;
    public function __construct($marks,$section){
        $this->section=$section;
        $this->marks=$marks;
        echo "I am the best student in class and my marks is".$marks."and his section is ".$this->section;
    }
}

$tech= new Student(50,2);



?>