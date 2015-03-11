<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carti1";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Eroare de conectare: " . mysqli_connect_error());
}

$query = "select * from autori  ";
$result = mysqli_query($conn, $query);
$rows=array();

        
        while ($row = mysqli_fetch_array($result)) {
             $rows[]=$row;
        }
        echo json_encode($rows);
        
