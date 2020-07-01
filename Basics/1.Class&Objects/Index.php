<?php

class Student{
    public $name;
    public $age;

    public function profile(){
        echo "Students name is {$this->name} and age is {$this->age}";
    }
    public function __construct($name,$age){
         $this->name=$name;
         $this->age=$age;
        //  echo "His name is {$this->name} and his age is {$this->age}";
    }
    public function addStudent(){
        echo "Student named {$this->name} age {$this->age} has been added";
        echo "<br>";
    }
}
// $student=new Student();
// $student->name="Tanzim";
// $student->age=25;
// $student->profile();
// $studenttwo=new Student();
// $studenttwo->name="Rakshi";
// $studenttwo->age=32;
// $studenttwo->profile();
// echo "The class is ".get_class($studentone);
// print_r(get_class_vars('Student'));

$student=new Student("Tanzim",25);
$studenttwo=new Student("Rakshi",32);
$student->addStudent();
$studenttwo->addStudent();









