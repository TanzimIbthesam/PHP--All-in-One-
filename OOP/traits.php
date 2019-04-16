<?php 
/*
Code reuse is one of the most important aspects of object-oriented programming. In PHP, you use inheritance to enable code reuse in different classes that share the same inheritance hierarchy. To achieve code reuse, you move the common functionality of classes to method of the parent class. Inheritance makes the code very tightly coupled therefore makes the code hard to maintain.



*/
class BDC{
public function test(){
    echo "Test from ABC";
}
}
trait abc{
    public function msg(){
        echo "He is liable ";
    }
}

class one extends BDC{
use abc;
}

$obj= new one;
 $obj->test();



?>