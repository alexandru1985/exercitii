<?php

$person = array(
 'name'=> 'Doe',
 'age'=> '50',
'locations'=> array (
    'Cluj',
    'Iasi')
    
);
echo $person['locations'][1];
//Iasi
echo '<pre>', print_r($person,true),'</pre>';

//Array
//(
//    [name] => Doe
//    [age] => 50
//    [locations] => Array
//        (
//            [0] => Cluj
//            [1] => Iasi
//        )
//
//)
