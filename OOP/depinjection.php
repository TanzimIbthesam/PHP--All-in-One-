<?php 
//Dependency Injection

/*
Library multiple uses. You have to use functionality of library into another library
*/
class Logger{
    public function log($message){
        echo "Message:$message";
    }
}
class UserProfile{
    private $logger;
    public function createUser(){
        
        $this->logger->log('You are logged in <br>'); 
    }
    public function updateUser(){
        
        $this->logger->log('Your information updated <br>'); 
    }
    public function deleteUser(){
       
        $this->logger->log('You are logged in'); 
    }
    public function __construct($logger){
     $this->logger=$logger;
    }
}
$logger=new Logger;
$tech = new UserProfile($logger);
$tech->createUser();
$tech->updateUser();
// $tech->log('You are logged in');



?>