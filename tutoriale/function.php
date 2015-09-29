<?php

function text()
{

    echo "String";
}

echo text();


$y = 3;

function modifica($y){

   echo $y++;
    
}

echo modifica($y);

// Output 3

$y = 3;

function modify($y){

   echo $y++;
    
}

echo modify(5);

// Output 5