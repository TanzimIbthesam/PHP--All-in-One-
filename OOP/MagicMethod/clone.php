<?php 
/*
However, using clone keyword is just a shallow copy, because all referenced properties will still point to the original variable.

If a __clone() method is defined in a object, then the __clone() method will be called in the copy-generated object and can be used to modify the value of the property (if necessary)



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

    public function __clone()
    {
        echo __METHOD__."your are cloning the object.<br>";
    }

}

$person = new Person('John'); // Initially assigned.
$person2 = clone $person;

var_dump('persion1:');
var_dump($person);
echo '<br>';
var_dump('persion2:');
var_dump($person2);


?>