<?php 


class Person{
    public  $name;
    public  $age;
    public  $jobtitle;
  
      public function __construct($name,$age,$jobtitle){
              $this->name=$name;
              $this->age=$age;
              $this->jobtitle=$jobtitle;
              echo "He is working as a ".$jobtitle;
              
      }
      public function profile(){
          // echo "He is a developer";
          return "He is a ".$this->jobtitle;
      }
      public function age(){
          return "His age is ".$this->age;
      }
  }
  class Employee extends Person{
    public $jobtitle;
    // public function __construct($name,$age,$jobtitle){
    //     $this->jobtitle=$jobtitle;
    //     parent::__construct($name,$age,$jobtitle);
    // }
    public function getjobtitle(){
        return $this->jobtitle;
    }
    }
// $info= new Person( 'Tanzim',29,'Web Developer');
$tech= new Employee('Tanzim',29,'WebDeveloper');
echo $tech->profile(),"<br>";
echo $tech->getjobtitle();
// echo $info->profile();





?>