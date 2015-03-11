<?php

class Student {
    public $nume = "John Doe";
    public $varsta = 21;
    public $note;

}
$s1 = new Student();
$s2 = new Student();
$s1->nume ="Ion Popescu";
$s1->varsta = 25;
$s2->nume ="Valentin Ionescu";
$s2->varsta = 27;
echo "Numele primului student este {$s1->nume}"."<br>";
if(strlen($s2->nume)&&($s2->varsta)>20) echo "Student valid";