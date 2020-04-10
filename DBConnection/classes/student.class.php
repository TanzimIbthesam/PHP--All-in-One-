<?php 
class student{
public $id_number;
public $age;

public function __construct($id_number,$age)

{
   $this->id_number=$id_number;
   $this->age=$age;    
}
public function getPerson(){
    echo "The students id is {$this->id_number} and his age is {$this->age}";
}

}



?>