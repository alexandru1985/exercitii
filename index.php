<?php

require('masina.php');
require('logan.php');

$logan = new logan('Logan');
$mercedes = new masina('Mercedes');

echo $logan->getNumeMasina();
echo $mercedes;

echo $logan->maximumSpeed();