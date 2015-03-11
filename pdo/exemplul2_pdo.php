<?php

$pdo = new PDO("mysql:host=localhost;dbname=carti1", "root", "");
$nr=$pdo->exec("UPDATE autori SET PRET= '5 lei' WHERE AUTOR= 'Marcel Proust'");

if($nr !==false) echo "Au fost actualizate $nr randuri";