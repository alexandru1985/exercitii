<?php

class Student {
    public $nume = "John Doe";
    public $varsta = 21;
    public $note;

}
$s1 = new Student();
$s2 = new Student();
echo "Numele primului student este {$s1->nume}"."<br>";
echo "Numele celui de-al doilea student este {$s2->nume}";