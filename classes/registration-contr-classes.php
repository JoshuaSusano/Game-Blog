<?php
class registration {
    private $email;
    private $password;
    private $confirm_password;

public function __construct($email , $password , $confirm_password){
$this->$email = $email
$this->$password = $password;
$this->$confirm_password = $confirm_password;
}

private function inputchecker (){
 $result;
 if (empty($this->$email) || empty($this->$password) || empty($this->$confirm_password) || ) {
  $result = false;
 }else {
    $result =  true;

 }
return $result;
}
}