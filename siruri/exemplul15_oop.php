<?php

class Carte {
    
 public $nrpagini = 100;
 
 function __construct($nr)
 {
     $this->nrpagini =$nr;
 }   
    
}
$c1 = new Carte(245);
$c2 = new Carte();

