<?php
$url = "http://localhost/joaca/files/date.txt";
$response = file_get_contents($url);
echo $response;