<?php 
class Employee{
    public $age;
    public $designation;
    public $salary;

    public function __construct($age,$designation,$salary){
            $this->age=$age;
            $this->designation=$designation;
            $this->salary=$salary;

           
    }
    public function profile()
    {
        echo "His age is {$this->age} and his designation is {$this->designation}","<br>";
    }
  
}
class HR extends Employee{
    public $role;
 
   public function __construct($age,$designation,$salary,$role)
   {
    parent::__construct($age,$designation,$salary,$role);
    
       $this->role=$role;

       
   }
   public function role(){
       echo "His designation is {$this->designation} his age is {$this->age} and his salary is {$this->salary} and his role is {$this->role}";
   }
}
 $employee=new Employee("Executive",25,20000);
 $employee->profile();
 $hr=new HR(25,"HRExecutive",20000,"Admin");
 $hr->role();




?>