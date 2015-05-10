<?php

$a= array( '1' => 'element 1', '2'=> 'elem 2', '3'=>' elem 3');
print_r($a);
echo ("<br></br>");
$b=serialize($a);
print_r($b);

?>
<br>
<html>
 Pentru a serializa un obiect este utilizata functia serialize ( ) care returneaza sirul de octeti care contine reprezentarea binara. 
 Pentru a deserializa un obiect se foloseste functia  unserialize ( ).
 (Un octet este format din 8 biti. Fiecare bit poate contine valoarea 1 sau 0. Din aceasta cauza, un octet poate reprezenta doar 256 de valori (doi la puterea a opta)).
S-au dezvoltat scheme de codare a caracterelor pe mai multi octeti pentru a lucra cu mai mult de 256 de caractere.
 
 </html>