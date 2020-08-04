<?php
   class Student{
      public function status()
      {
         echo "New student";
      }
   }
   class Teacher extends student{
   public function status()
   {
      echo "New teacher";
   }
   }
   $teacher=new Student();
   $teacher->status();
?>


