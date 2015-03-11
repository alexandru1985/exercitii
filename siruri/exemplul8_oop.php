<?php


class Student {
    public $nume = "John Doe";
    public $varsta = 20;
    public $note;
}

$student1= new Student();
$student2= new Student();
 echo "Numele primului student este {$student1->nume}";