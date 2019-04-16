<?php 
/*
Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. A property declared as static cannot be accessed with an instantiated class object (though a static method can). 
*/
// class Stu{
//     public static $name='Tanzim';
  
//     public static function name($name){
//         echo self::$name;
//     }
// }
// $stu::name();
class Stu{
    public static $name;
    public static function Setname($name){
      self::$name=$name;
    }
    public static function Getname(){
        return self::$name;
    }
}

Stu::SetName('Tanzim');
echo Stu::Getname();

?>