<?php 
class Profile{
    static $name="Tanzim";
    public function details()
    {
        echo self::$name;
    }
    static public function newprofile()
    {
        echo "We get this function from".__CLASS__;
    }
}
$profile=new Profile();
$profile->details();
echo "<br>";
Profile::newprofile();






?>