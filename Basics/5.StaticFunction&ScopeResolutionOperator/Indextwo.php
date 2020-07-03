<?php 
class Father{
 public $height;
 public $iq;
 
public static function profile()
{
    echo "This is his new profile";
}
}
class Child extends Father{
   public function show()
   {
         Father::profile();
   }
}

$child=new Child();
$child->show();
