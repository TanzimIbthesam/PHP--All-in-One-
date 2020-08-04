<?php 
abstract class Student{
    abstract public function newstudent();
}
abstract class College{
    abstract public function newstudent();
}
class School extends Student{
    public function newstudent(){
        echo "Hello World";
    }

}
$student=new School();
$student->newstudent();



?>