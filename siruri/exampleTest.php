<?php

require_once 'example.php';
class exampleTest extends PHP_Unit_Framework_TestCase {
    
    function canAddTowNumbers(){
       $firstNumber = 3;
       $secondNumber = 2;        
     
      return $this->add($firstNumber, $secondNumber);
    }
} 
