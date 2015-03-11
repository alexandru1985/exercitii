<?php


$connect = mysql_connect('localhost','root','');
$select = mysql_select_db('carti1');

if ($connect&&$select == FALSE){ echo "Eroare";}

$q = mysql_query("UPDATE autori SET CARTE ='abcd' WHERE  CARTE ='abc'");

if($q !==false) echo "Au fost actualizate $q randuri";