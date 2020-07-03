<?php 
abstract class Name{
    abstract function profile();
}
class Neu extends Name{
public function profile(){
    echo "Hello World";
}
}
$neu=new Neu;
$neu->profile();


?>