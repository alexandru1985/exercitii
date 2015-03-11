<?php

class Example {
   public function __construct ($thing){
   $this->Something($thing);    
   }
    
   public function Something($thing){
    echo $thing;   
   }
    
}

$example = new Example('Some text');
