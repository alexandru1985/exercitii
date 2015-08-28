<?php

$data = array("name" => "Doe","age" => 40);
$string = http_build_query($data);


$ch = curl_init("http://localhost/joaca/cURLtest/post_data/data.php");

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
curl_close($ch);
