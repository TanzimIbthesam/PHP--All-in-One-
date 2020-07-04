<?php 
interface School{
    public function schoolteacher();
}
interface College{
    public function collegeteacher();
}
interface University{
    public function universityteacher();
}
class Teacher implements School,College,University{
     public function schoolteacher(){
         echo "I am a school teacher","<br>";
     }
     public function collegeteacher(){
         echo "I am a college teacher","<br>";
     }
    //  public function universityteacher(){
    //      echo "I am a university teacher","<br>";
    //  }
    
}
$teacher=new Teacher();
$teacher->collegeteacher();
$teacher->schoolteacher();
// $teacher->universityteacher();



?>