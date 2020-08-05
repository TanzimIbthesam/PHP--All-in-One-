<?php 
class Employee{
public $age;
public $designation;
public function __construct($age,$designation)
{
    $this->age=$age;
    $this->designation=$designation;
}
public function profile()
{
    echo "His age is {$this->age} and designation is {$this->designation}","<br>";
}
}
class Admin extends Employee{
    public $role;
    public function __construct($age, $designation,$role)
    {
        parent:: __construct($age,$designation);

        
        $this->role=$role;
    }
    public function adminRole()
    {
        echo "His age is {$this->age} and designation is {$this->designation} and his role is {$this->role}", "<br>";
    }
}

$employee=new Employee(20,'Executive');
$employee->profile();
$admin=new Admin(20,"Executive","Admin");
$admin->adminRole();

