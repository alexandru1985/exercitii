<?php

class Student {
    public $nume = "John Doe";
    public $varsta = 21;
    public $note;
    
    function __construct($n,$v)
    {
     $this->nume = $n;
     $this->varsta =$v; 
    }

}

