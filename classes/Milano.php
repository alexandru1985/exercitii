<?php

class Milano{
   public $houses;
   public $cars;
   public $streets;
   public $stores;
   public $buses;
    
  public function __construct(){    
    $this->houses = 1500; 
    $this->cars = 20000; 
 }
  public function getHouses(){
  return $this->houses;       
  }   
  public function getCars(){
  return $this->cars;       
  }
  
  
}

$object = new Milano();
echo $object->getHouses();
$object1 = new Milano();
echo "Masini Milano:".$object1->getCars()."<br>";