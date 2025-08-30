<?php

class registration {
private $email;
private $confirm_email;
private $password;

// i will create a constructor

public function _construct($email , $confirm_email , $password){
    $this->$email = $email;
    $this->$confirm_email = $confirm_email;
    $this->$password = $password;
}

private function emptyInput(){
    $result;
    if (empty($this->$email) || empty($this->$confirm_email) || empty($this->$password) ){
      $result = false;
    }else{
        $result= true;
    }
    return $result;
}
}
