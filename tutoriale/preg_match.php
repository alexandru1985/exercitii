<?php

$string = "This is a string";

if (preg_match('/This/', $string)) {

    echo "Match found.";
} else {
    echo "Match not found.";
}

//Output
//Match found.