<?php 
/*
PHP 5 introduces abstract classes and methods. Classes defined as abstract may not be instantiated, and any class that contains at least one abstract method must also be abstract. Methods defined as abstract simply declare the method's signature - they cannot define the implementation. 
When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child; additionally, these methods must be defined with the same (or a less restricted) visibility. For example, if the abstract method is defined as protected, the function implementation must be defined as either protected or public, but not private. Furthermore the signatures of the methods must match, i.e. the type hints and the number of required arguments must be the same. For example, if the child class defines an optional argument, where the abstract method's signature does not, there is no conflict in the signature. This also applies to constructors as of PHP 5.4. Before 5.4 constructor signatures could differ. 
*/

abstract class fulltime{
    protected $firstname;
    protected $lastname;
    protected $annualsalary;
    protected $totalhours;
     abstract protected function getMonthlysalary();
    public function getFullname(){
         return $this->firstname." ".$this->lastname;
    }
    // public function getMonthlysalary(){
    //     return $this->annualsalary." ".$this->totalhours;
    // }
    public function __construct($f,$l){
        $this->firstname=$f;
        $this->lastname=$l;
    }
    
}
class BaseEmployee extends fulltime{
    protected $annualsalary;

    public function getMonthlysalary(){
        return $this->annualsalary;
    }
}
class ContractualEmployee extends BaseEmployee{
    protected $firstname;
    protected $lastname;
    protected $annualsalary;
    protected $totalhours;

    public function getFullname(){
         return $this->firstname." ".$this->lastname;
    }
    public function getMonthlysalary(){
        return $this->annualsalary." ".$this->totalhours;
    }
    public function __construct(){
        $this->firstname=$f;
        $this->lastname=$l;
    }
}
class FulltimeEmployee extends BaseEmployee{
    protected $hourlyrate;
    protected $totalhours;

    public function getMonthlysalary(){
        return $this->hourlyrate*$this->totalhours;
    }
}
$employee= new BaseEmployee('Base','Employee');
echo $employee->getFullname();



// $tech=new fulltime('Fulltime','Employee');
// echo $tech->getFullname();
//u cant create object of the Abstract class you have to extend it
?>