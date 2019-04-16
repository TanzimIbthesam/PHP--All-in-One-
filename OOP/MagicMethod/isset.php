<?php 
/*
Before using the __isset () method, let me explain the use of the isset () method first. The isset () method is mainly used to determine whether the variable is set.

If you use the isset() method outside the object, there are two cases:

    If the parameter is a public property, you can use the isset() method to determine whether the property is set or not.
    If the parameter is a private property , the isset() method will not work.
*/
class Person
{
    public $sex;
    private $name;
    private $age;

    public function __construct($name="",  $age=25, $sex='Male')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
    }

    /**
     * @param $content
     *
     * @return bool
     */
    public function __isset($content) {
        echo "The {$content} property is private，the __isset() method is called automatically.<br>";
        echo  isset($this->$content);
    }
}

$person = new Person("John", 25); // Initially assigned.
echo isset($person->sex),"<br>";
echo isset($person->name),"<br>";
echo isset($person->age),"<br>";






?>