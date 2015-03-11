<?php

class Student {
 public $nume="Ion Popescu";
public $varsta=21;
public $nume1 ="Valentin Ionescu ";
public $varsta1=25;
}
$s1= new Student();
$s2= new Student();
 echo "Numele primului student este {$s1->nume}"."<br>";
 if(strlen($s1->nume)&&$s1->varsta>20){
          echo "Student valid"."<br>";}
 echo "Numele celui de al doilea student este {$s2->nume1}"."<br>";
 if(strlen($s2->nume1)&&$s2->varsta>20){
          echo "Student valid"."<br>";}          