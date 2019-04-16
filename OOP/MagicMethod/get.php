<?php
/*
__get-mostly accesible for private variables



*/
class student{
    private $pm;
    public function __get( $pm){
           echo " The value of pm is ".$pm;
    }
    public function __set($pm,$value){
       echo "We set the value of $pm to $value";
    }

    
}
$tech= new student;
$tech->Abrar;
$tech->age=12;


?>