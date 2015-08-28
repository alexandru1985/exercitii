<?php

function add($number1, $number2)
{

    $result = $number1 + $number2;
    return $result;
}

echo add(10, 10);
echo "<br />";
function divide($number1, $number2)
{

    $result = $number1 / $number2;
    return $result;
}
$sum= divide(add(50, 50),add(10, 10));
echo $sum;