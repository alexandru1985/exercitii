<?php

$connect = mysql_connect('localhost','root','');
$select = mysql_select_db('carti1');

if ($connect&&$select == FALSE){ echo "Eroare";}

$q = mysql_query("SELECT CARTE FROM autori");


while($rand = mysql_fetch_assoc($q)){
    echo "<ul>";
    echo "<li> {$rand['CARTE']}</li>";
    echo "</ul>";
    
}