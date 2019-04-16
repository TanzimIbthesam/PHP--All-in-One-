<?php 
//Interface
interface abc{
    public function test();
    public function xyz();
}
interface dcd{
    public function greet();
}
class def implements abc,dcd{
    public function test(){
        echo "Test function,<br>";
    }
    public function xyz(){
        echo "xyz function";
    }
    public function greet(){
        echo "Greet us";
    }
}
$tech= new def;
$tech->test();
$tech->greet();
//You can extend only one class in php whether ist inheritant or normal class.But in case of interface you can implement multiple interfaces you can only declare public function in interface 

/*
You can follow this and team can follow same structure of coding system 
*/
?>