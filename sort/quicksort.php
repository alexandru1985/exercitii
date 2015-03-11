<?php

function quicksort($seq) {
    if(!count($seq)) return $seq;
    $pivot= $seq[0];
    $low = $high = array();
    $length = count($seq);
    for($i=1; $i < $length; $i++) {
        if($seq[$i] <= $pivot) {
            $low [] = $seq[$i];
        } else {
            $high[] = $seq[$i];
        }
    }
    return array_merge(quicksort($low), array($pivot), quicksort($high));
}
//Let's try some examples
$myarr = array(25,5,3,4,17,1,88,8);
$final = quicksort($myarr);
print_r($final);
$strarray = array("mark","marco","bruce","min","lance",);
var_dump(quicksort($strarray));

