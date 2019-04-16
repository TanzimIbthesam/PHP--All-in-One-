<?php 
abstract class Student{
    protected static $table="student_table";

    public function Cname(){
        echo "INSERT INTO ".static::$table;
    }
}
class pupil extends Student{
    protected static $table="student_info";
    
}
class tutor extends Student{

}

$pupil=new pupil;
$pupil->Cname();
/*



*/
?>