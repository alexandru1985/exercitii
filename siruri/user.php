<?php

class User {
    public $email;
    public $password;
    const MINCHARS = 8;      

    public function login(){
      return 'Logging in ...';  
    }
    public function logout(){
      return 'Loggin out ...';  
    }
    
    public function setPassword($string){
        if((strlen($string)< self::MINCHARS)){
            throw new Exception('The password should be at least . self::MINCHARS . long characters');
        }
        $this->password = hash('sha256',$string); // sha256 este un altgoritm hash predefinit
    }
    public function getPassword() {
        return $this->password; 
    }
    public function setEmail($string) {
        if(!filter_var($string,FILTER_VALIDATE_EMAIL)){
          throw new Exception('Provide a valid email.');   
        }
        $this->email=$string;
        
    }
      public function getEmail() {
        return $this->email; 
    }
}


