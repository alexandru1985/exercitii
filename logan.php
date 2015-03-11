<?php

//require 'masina.php';

class logan extends masina
{
    public function __construct($nume)
    {
        parent::__construct($nume);
    }
    
    public function maximumSpeed()
    {
        return 200;
    }
}
