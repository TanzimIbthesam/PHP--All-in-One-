<?php 
/*
__invoke()

When you try to call an object in the way of calling a function, the __ invoke() method will be called automatically.
*/
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

    public function __invoke() {
        echo 'This is an object';
    }

}

$person = new Person('John'); // Initially assigned.
$person();






?>