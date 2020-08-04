<?php 
class Student{
    public $name;
    public $username;

    public function __construct($name,$email){
        $this->name=$name;
        $this->email=$email;
    }

}

class Admin extends Student{
    public $role;
    public function __construct($email,$username,$role){
        
        parent::__construct($email,$username);
        $this->role = $role;
        
    }
    public function profileinfo()
    {
        echo "His name is {$this->username} and his email is {$this->email} and role is  {$this->role}";
    }
}

$admin=new Admin("Tanzim11", "tanzim67@gmail.com","WebDeveloper");
$admin->profileinfo();
?>