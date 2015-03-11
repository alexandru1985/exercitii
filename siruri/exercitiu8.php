<?php
//prima varianta, cu fopen

$fisier = "exemplu.txt";/*
$handle = fopen($fisier, "w+");
fwrite($handle, "Ana are 5 mere.");
rewind($handle);
$c = fread($handle, filesize($fisier));
$noul_c = str_replace("5", "3", $c);
rewind($handle);
sleep(10);
fwrite($handle, $noul_c);
fclose($handle);
*/

//varianta cu file_get_contents
/*
file_put_contents($fisier, "Ana are 5 mere.");
file_put_contents($fisier, str_replace("5", "3", file_get_contents($fisier)));
*/

$c=file_get_contents("http://www.evomag.ro/img/692639/500x500/1409320410Laptop+MSI+GS70+2PE+Stealth+Pro+6.jpg");
file_put_contents("poza.jpg", $c);

?>