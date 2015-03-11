<?php

class masina
{
    private $numeMasina;
    private $nrKilometri;
    
    public function __construct($nume) {
        $this->numeMasina = $nume;
    }
    
    public function maximumSpeed()
    {
        return 0;
    }
    
    public function __toString()
    {
        return $this->numeMasina;
    }
    
    public function getNumeMasina()
    {
        return $this->numeMasina;
    }
}

