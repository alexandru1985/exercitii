<?php
require 'Milano.php';
class Torino extends Milano {
    
    public function __construct(){    
         parent::__construct(); 
        $this->streets = 45; 
    

 }
 
 
  public function getStreets(){
  return $this->streets;       
  }  
    
    
}
$object3 = new Torino();
echo "Strazi Torino:".$object3->getStreets()."<br>";