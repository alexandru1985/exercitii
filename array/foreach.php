<?php

$cities = array('Bucuresti','Cluj','Iasi');


foreach ($cities as $city){
    
    echo $city, '<br>';
    
    
}

//Bucuresti
//Cluj
//Iasi

$cities = array('Bucuresti','Cluj','Iasi');
$newstring = implode(',',$cities);
 echo $newstring;
 
$cities = array('Bucuresti','Cluj','Iasi');
$new_array = explode(' ',$cities);
 echo $new_array; 