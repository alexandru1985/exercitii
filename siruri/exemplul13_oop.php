<?php

class Student {
    public $nume = "John Doe";
    public $varsta = 21;
    public $note;
    
function detalii(){ echo "Studentul cu numele {$this->nume} si varsta {$this->varsta}";}

function comparaVarste($s){
    if($this->varsta>$s1->varsta){
        echo "{$this->nume} este mai mare!";
       }
    else { echo"{$s1->varsta} este mai mare!";
}
}
}
$s = new Student();
$s->detalii();
echo "<br>";
$s1 = new Student();
$s1->nume ="Ion Popescu";
$s1->varsta = 25;
$s1->detalii();
echo "<br>";
$s1->comparaVarste($s);