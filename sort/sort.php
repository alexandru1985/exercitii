<?php

$numbers = array(1, 3, 5, 7, 9, 11, 13, 15);
rsort($numbers);
$arraylenght = count($numbers);
for ($x = 0; $x < $arraylenght; $x++) {

    echo $numbers[$x];
    echo "<br>";
}
$a = "carte";
$b = "arte";

echo strpos($a, $b);
