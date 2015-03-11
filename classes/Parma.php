<?php
require 'Torino.php';



class Parma extends Torino{
    
    public function __construct(){  
    parent::__construct(); 
        
    $this->buses= 120; 

 }
 
 
  public function getBuses(){
  return $this->buses;       
  }  
    
    
}
$object4 = new Parma();
echo "Autobuze:".$object4->getBuses()."<br>";
$object5 = new Parma();
echo "Strazi Parma:".$object5->getStreets()."<br>";