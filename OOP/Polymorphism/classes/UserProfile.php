<?php 

class UserProfile{
    private $logger;

    public function createUser(){
        echo "Creating user.";
        $this->logger->log("User Created");
    }
    public function updateUser(){
        echo "Update user.";
        $this->logger->log("User Updated");
    }
    public function deleteUser(){
        echo "Delete user.";
        $this->logger->log("User Deleted");
    }
    public function __construct(LoggerInterface $logger){
     $this->logger=$logger;
    }
    
}




?>