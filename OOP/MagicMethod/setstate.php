<?php 
// Starting from PHP 5.1.0, the __set_state() method is called automatically when calling var_export() to export the class code.

// The parameters of the __set_state() method is an array containing the values of all the properties, with the format of array('property' => value,...)

// We don't define __set_state() method in the following example:


class Person
{
    public $sex;
    public $name;
    public $age;

    public function __construct($name="",  $age=25, $sex='Male')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
    }

}

$person = new Person('John'); // Initially assigned.
var_export($person);



?>