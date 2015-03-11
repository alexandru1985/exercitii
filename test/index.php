<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Eroare de conectare: " . mysqli_connect_error());
}


$browser = get_browser(null,true);
$browserType = $browser['browser'];
echo $browserType . "<br>";

$resultBrowser = mysqli_query($conn,"select * from totals where browser = '$browserType' ");

while($row= mysqli_fetch_assoc($resultBrowser))  
{
  $softpediaRate=$row['ratie_softpedia']; 
  $kappaRate=$row['ratie_kappa'];         
  $downloadRate =$row['ratie_download.com']; 
}
$distribution = rand(1,100);

if ($distribution < $softpediaRate) {
    echo "Softpedia";}   
elseif ($distribution < $softpediaRate +  $kappaRate) {
    echo "Kappa" ;}    
elseif ($distribution < $softpediaRate +  $kappaRate +  $downloadRate) {
    echo "Download.com";
}
?>