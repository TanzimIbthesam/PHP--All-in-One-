<?php 
class UserValidator {
    private $data;
    private $errors=[];
    private static $fields=['username','email'];
    
    public function __construct($data)
    {
        $this->data=$data;
    }
    public function ValidateForm(){
        foreach(self::$fields as $field){
              if(!array_key_exists($field,$this->data)){
                  trigger_error("{$field} is not present in data");
                  return;
    
              }
              }
        
        $this->ValidateUsername();
        $this->ValidateEmail();
        return $this->errors;
    }
    private function ValidateUsername(){
    $val=trim($this->data['username']);
    if(empty($val)){
        $this->AddError('username','Username cannot be empty');
    }else{
        if(!preg_match('/^[a-zA-Z0-9]{6,12}$/',$val)){
            $this->AddError('username','Username must atleast be 6-12 characters and alpahnumeric');
        }
    }
    }
    private function ValidateEmail(){
        $val=trim($this->data['email']);
    if(empty($val)){
        $this->AddError('email','Email cannot be empty');
    }else{
        if(!filter_var($val,FILTER_VALIDATE_EMAIL)){
            $this->AddError('email','Email address entered must be valid');
        }
    }
    
    }
    private function AddError($key,$value){
        $this->errors[$key]=$value;
    
    }
}
