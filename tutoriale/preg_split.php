<?php

$str = 'string';
$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
print_r($chars);

//Output
//Array ( [0] => s [1] => t [2] => r [3] => i [4] => n [5] => g )