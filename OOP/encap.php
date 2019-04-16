<?php 
/*
public 
private
protected
The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined by prefixing the declaration with the keywords public, protected or private. Class members declared public can be accessed everywhere. Members declared protected can be accessed only within the class itself and by inheriting and parent classes. Members declared as private may only be accessed by the class that defines the member. 


*/
/* Public  */
// class Student{
// public $age;
// private $height=6;
// protected $weight;

// public function stu(){
//     echo "His age is ".$this->age,"<br>";
// }
// // private function gim(){
// //     echo "His height is ".$this->height;
// // }
// public function gim(){
//     echo "His height is ".$this->height."feet";
// }
// private function testPrivate(){
//     echo "His name is Machoman";
// }

// }
// class vision extends Student{
//     public $weight=25;
//     public function jet($weight){
//         echo "His weight is ".$weight."kg","<br>";
//     }
//     private function BPL(){
//     echo "His name is Machoman","<br>";
// }
// }
// $tech= new Student;
// $info=new vision;
// $info->BPL();
// // $info->weight=60;
// // $info->weight=12;
// $tech->age=25;
// // $tech->height=6;
// $tech->stu();
// $tech->gim();





// ?>
<?php
class Student{
    public $age;
    private $marks;
    protected $grade='A+';

    public function age(){
        echo "The average age of undergard University students is ".$this->age,"<br>";
    }
    public function Setmarks($marks){
        $this->marks=$marks;
        
        
    }
    public function Getmarks(){
        return $this->marks;
    }
    public function test(){
        $this->marksone();
        $this->gradesone();
    }
    private function marksone(){
      echo "This is our marks","<br>";
    }
    protected function gradesone(){
        echo "This is our grade","<br>";
    }
}
class Tutor extends Student{
    public function grade(){
        echo "His final grade is ".$this->grade;
    }
}
$tech=new Student;
$tech->age=22;
$tech->age();
$tech->Setmarks(20);
echo $tech->Getmarks();
$info=new Tutor;

echo $info->grade();
$tech->test();
 ?>