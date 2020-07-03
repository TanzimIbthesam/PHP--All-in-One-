<?php 
class Student{
    public $age;
    public $name;
    private $result;
    protected $fees;
   public function profile(){
        echo "The new students name is {$this->name} and his age is {$this->age}";
        echo "<br>";
    }
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
     
    }
    public function setResult($result){
       $this->result=$result;
    }
    public function getResult(){
      echo "His result is {$this->result}";
    }

}
class Adminstration extends Student{
    public function setFees($fees){
       $this->fees=$fees;

    }
    public function getFees(){
        echo "His fees are {$this->fees} due","<br>";
        
    }
}

$student=new Student("Tanzim",25);
$studenttwo = new Student("Richard",25);

$student->profile();
 $studenttwo->profile();
 $student->setResult(50);
 $student->getResult();
 $adminstration=new Adminstration("Tanzim",20);
 $adminstration->setFees(5000);
 echo "<br>";
 $adminstration->getFees();


