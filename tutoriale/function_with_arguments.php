<?php

$number1 = 5;
$number2 = 10;

function add($number1, $number2)
{

    echo $number1 + $number2;
}
add($number1, $number2);

echo "<br />";

function displayDate($day, $date, $year)
{

    echo $day . ' ' . $date . ' ' . $year;
}

displayDate('Monday', '5', '2014');
