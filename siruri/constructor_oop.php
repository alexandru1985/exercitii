<?php

class Person {
    
    public $name;
    
    public function __construct(){
        
    $this->name="Simple name";
        
    }
     public function getName(){
         
        return $this->name;
     }
    
    
    
}
$object= new Person();
echo $object->getName();