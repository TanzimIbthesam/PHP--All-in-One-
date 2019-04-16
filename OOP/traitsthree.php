<?php 
// You cant instantiate a trait you can just use it
class mobile{
public function msg(){
    echo "This is our new message";
}
}
trait xyx{
    public function game(){
        echo "The game is awesome";
    }
}
trait abc{
    
    public function power(){
        echo "Superpower is a new series";
    }
    
}

class galaxy extends mobile{

use abc;
}

$obj= new galaxy;

// $obj->power();
$obj->power();
// $obj->msg();
// $obj->grid();


?>