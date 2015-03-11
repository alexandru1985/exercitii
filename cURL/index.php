<?php
 
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://localhost/joaca/api/rest/?name=c");


curl_exec($ch);

curl_close($ch);

