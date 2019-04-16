<?php 
// include 'Static.php';
// echo self::name();
// class Student{
//     public $age;
//     public $name;
//     public $marks;

//     public function __construct($age,$name,$marks){
//         $this->age=$age;
//         $this->name=$name;
//         $this->marks=$marks;

//         echo "His age is ".$age."his name is ".$name. "he got ".$marks;
//     }
// }
// class Teacher extends Student{
//  public function __construct($age,$name,$marks){
//      parent::__construct($age,$name,$marks);
//  }
// }
// $tech= new Teacher(20,'John',100);
// echo $tech;
class Student{
   public static $name='Tanzim';
//    public $marks;


   public static function Profile(){
       return self::$name;
   }
}
echo Student::Profile();

?>