<?php 
class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}
$class = new MyClass();
$class->showConstant();






?>