<?php 
class Dbh{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $dbname= "oopnew";
 
    protected function connect(){
     
            $conn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $pdo = new PDO($conn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
           return $pdo;
            
          

  
     

      }
           
           
   
    }


