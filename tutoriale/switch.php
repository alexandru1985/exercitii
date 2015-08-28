<?php

$number = 3;

switch ($number) {
    case 1:
        echo "One.";
        break;
    case 2:
        echo "Two.";
        break;
    case 3:
        echo "Three.";
        break;
    default:
        echo "Not number found.";
        break;
}
echo "<br />";
exit('The script was interrupted.');
//Output
//Three.

$number = 5;

switch ($number) {
    case 1:
        echo "One.";
        break;
    case 2:
        echo "Two.";
        break;
    case 3:
        echo "Three.";
        break;
    default:
        echo "Not number found.";
        break;
}

//Output
//Not number found.
