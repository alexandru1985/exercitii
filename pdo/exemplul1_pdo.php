<?php

$pdo = new PDO("mysql:host=localhost;dbname=carti1", "root", "");
$r=$pdo->query("SELECT*FROM autori");

while($d=$r->fetch(PDO::FETCH_BOTH)){
    
    echo $d['AUTOR']."<br>";
}